import React, { useRef, useEffect, useState } from 'react';
import ReactDOM from 'react-dom';
import { ToastContainer, toast } from 'react-toastify';
import 'react-toastify/dist/ReactToastify.css';

const Import = () => {

    const fileRef = useRef()
    const APP_URL = 'http://127.0.0.1:8000/api';
    const [batchId, setBatchId] = useState(null);
    const [error, setError] = useState(false);
    const [isLoading, setIsLoading] = useState(false);
    const notify = () => toast("Wow so easy!");

    const handleForm = e => {

        if(isLoading) return;
        const inputFile = fileRef.current;
        const file = inputFile.files[0];
        if(!file) {
            setError(true);
            e.preventDefault();
            return;
        }
        const formData = new FormData();
        formData.append('csv',file);

        setIsLoading(true)
        fetch(`${APP_URL}/upload`,{
            method: "post",
            body: formData
        })
        .then((res) => res.json())
        .then((data) => {
            setBatchId(data.id);
            setIsLoading(false)
        });
    }
    
    const [batchDetail, setBatchDetail] = useState({});

    const batchDetails = (id = null) => {
        const currentBatchId = id ?? batchId;
        fetch(`${APP_URL}/batch?id=${currentBatchId}`)
        .then((res) => res.json())
        .then((data) => {
            if(data.progress > 100) {
                clearInterval(progressInterval.current);
            }
            setBatchDetail(data)
        });
    }
    
    const progressInterval = useRef("");

    const updateProgess = () => {
        if(progressInterval.current != "") return;
        progressInterval.current = setInterval(() => {
            batchDetails();
        }, 2000);
    }

    useEffect(() => {
        if(batchId != null) {
            updateProgess();
        }
    }, [batchId])

    useEffect(() => {
        fetch(`${APP_URL}/batch/in-progress`)
        .then((res) => res.json())
        .then((data) => setBatchId(data.id));
    }, [])
    

    return (
        <>
            <div className="row">
                {batchDetail.progress != undefined &&
                    <section>
                        <div className="card-body">
                            Upload is in progress ({batchDetail.progress}%) <br></br>
                            <progress value={batchDetail.progress} max="100"></progress>
                        </div>
                    </section>
                }
                {batchDetail.progress == undefined &&
                    <section>
                    <div className="card-header">User bulk upload</div>
                        <div className="card-body">
                            <form onSubmit={handleForm}>
                                <input type="file" ref={fileRef}/>

                                <input type="submit" value="Upload" className="btn btn-dark"/>
                                {error && <div className="text-red">Please select file first!</div>}
                            </form>
                        </div>
                    </section>
                }
            </div>
        </>
    );
}

export default Import;

if (document.getElementById('example')) {
    ReactDOM.render(<Import />, document.getElementById('example'));
}
