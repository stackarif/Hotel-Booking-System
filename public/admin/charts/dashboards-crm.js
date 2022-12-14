"use strict";
!(function () {
    let o, e, r, t, a, s, i, c, h;
    h = isDarkStyle
        ? ((o = '#595cd9'), (e = '#595cd9'), (r = '#595cd9'), (a = '#595cd9'), (t = "dark"), (s = "#4f51c0"), (i = "#595cd9"), (c = "#8789ff"), "#c3c4ff")
        : ((o = '#595cd9'), (e = '#595cd9'), (r = '#595cd9'), (a = '#595cd9'), (t = ""), (s = "#e1e2ff"), (i = "#c3c4ff"), (c = "#a5a7ff"), "#696cff");
    var n = { donut: { series1: '#595cd9', series2: "rgba(113, 221, 55, 0.6)", series3: "rgba(113, 221, 55, 0.4)", series4: "rgba(113, 221, 55, 0.2)" } };
    const p = document.querySelectorAll(".chart-progress");
    p &&
        p.forEach(function (o) {
            var e = '#595cd9',
                r = o.dataset.series,
                e = {
                    chart: { height: 55, width: 45, type: "radialBar" },
                    plotOptions: { radialBar: { hollow: { size: "25%" }, dataLabels: { show: !1 }, track: { background: '#595cd9' } } },
                    colors: [e],
                    grid: { padding: { top: -15, bottom: -15, left: -5, right: -15 } },
                    series: [r],
                    labels: ["Progress"],
                };
            const t = new ApexCharts(o, e);
            t.render();
        });
    var l = document.querySelector("#customerRatingsChart"),
        d = {
            chart: { height: 200, toolbar: { show: !1 }, zoom: { enabled: !1 }, type: "line", dropShadow: { enabled: !0, enabledOnSeries: [1], top: 13, left: 4, blur: 3, color: '#595cd9', opacity: 0.09 } },
            series: [
                { name: "Last Month", data: [20, 54, 20, 38, 22, 28, 16, 19] },
                { name: "This Month", data: [20, 32, 22, 65, 40, 46, 34, 70] },
            ],
            stroke: { curve: "smooth", dashArray: [8, 0], width: [3, 4] },
            legend: { show: !1 },
            colors: [a, '#595cd9'],
            grid: { show: !1, borderColor: r, padding: { top: -20, bottom: -10, left: 0 } },
            markers: {
                size: 6,
                colors: "transparent",
                strokeColors: "transparent",
                strokeWidth: 5,
                hover: { size: 6 },
                discrete: [
                    { fillColor: '#595cd9', seriesIndex: 1, dataPointIndex: 7, strokeColor: '#595cd9', size: 6 },
                    { fillColor: '#595cd9', seriesIndex: 1, dataPointIndex: 3, strokeColor: '#595cd9', size: 6 },
                ],
            },
            xaxis: { labels: { style: { colors: r, fontSize: "13px" } }, axisTicks: { show: !1 }, categories: ["", "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"], axisBorder: { show: !1 } },
            yaxis: { show: !1 },
        };
    if (null !== l) {
        const y = new ApexCharts(l, d);
        y.render();
    }
    (l = document.querySelector("#salesActivityChart")),
        (d = {
            chart: { type: "bar", height: 275, stacked: !0, toolbar: { show: !1 } },
            series: [
                { name: "PRODUCT A", data: [75, 50, 55, 60, 48, 82, 59] },
                { name: "PRODUCT B", data: [25, 29, 32, 35, 34, 18, 30] },
            ],
            plotOptions: { bar: { horizontal: !1, columnWidth: "40%", borderRadius: 10, startingShape: "rounded", endingShape: "rounded" } },
            dataLabels: { enabled: !1 },
            stroke: { curve: "smooth", width: 6, lineCap: "round", colors: [o] },
            legend: { show: !1 },
            colors: ['#595cd9', "#435971"],
            fill: { opacity: 1 },
            grid: { show: !1, strokeDashArray: 7, padding: { top: -10, bottom: -12, left: 0, right: 0 } },
            xaxis: { categories: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"], labels: { show: !0, style: { colors: r, fontSize: "13px" } }, axisBorder: { show: !1 }, axisTicks: { show: !1 } },
            yaxis: { show: !1 },
            responsive: [
                { breakpoint: 1440, options: { plotOptions: { bar: { borderRadius: 10, columnWidth: "50%" } } } },
                { breakpoint: 1300, options: { plotOptions: { bar: { borderRadius: 11, columnWidth: "55%" } } } },
                { breakpoint: 1200, options: { plotOptions: { bar: { borderRadius: 10, columnWidth: "45%" } } } },
                { breakpoint: 1040, options: { plotOptions: { bar: { borderRadius: 10, columnWidth: "50%" } } } },
                { breakpoint: 992, options: { plotOptions: { bar: { borderRadius: 12, columnWidth: "40%" } }, chart: { type: "bar", height: 320 } } },
                { breakpoint: 768, options: { plotOptions: { bar: { borderRadius: 11, columnWidth: "25%" } } } },
                { breakpoint: 576, options: { plotOptions: { bar: { borderRadius: 10, columnWidth: "35%" } } } },
                { breakpoint: 440, options: { plotOptions: { bar: { borderRadius: 10, columnWidth: "45%" } } } },
                { breakpoint: 360, options: { plotOptions: { bar: { borderRadius: 8, columnWidth: "50%" } } } },
            ],
            states: { hover: { filter: { type: "none" } }, active: { filter: { type: "none" } } },
        });
    if (null !== l) {
        const g = new ApexCharts(l, d);
        g.render();
    }
    (l = document.querySelector("#sessionsChart")),
        (d = {
            chart: { height: 90, type: "area", toolbar: { show: !1 }, sparkline: { enabled: !0 } },
            markers: {
                size: 6,
                colors: "transparent",
                strokeColors: "transparent",
                strokeWidth: 4,
                discrete: [{ fillColor: '#595cd9', seriesIndex: 0, dataPointIndex: 8, strokeColor: '#595cd9', strokeWidth: 2, size: 6, radius: 8 }],
                hover: { size: 7 },
            },
            grid: { show: !1, padding: { right: 8 } },
            colors: ['#595cd9'],
            fill: { type: "gradient", gradient: { shade: t, shadeIntensity: 0.8, opacityFrom: 0.8, opacityTo: 0.25, stops: [0, 95, 100] } },
            dataLabels: { enabled: !1 },
            stroke: { width: 2, curve: "straight" },
            series: [{ data: [280, 280, 240, 240, 200, 200, 260, 260, 310] }],
            xaxis: { show: !1, lines: { show: !1 }, labels: { show: !1 }, axisBorder: { show: !1 } },
            yaxis: { show: !1 },
        });
    if (null !== l) {
        const f = new ApexCharts(l, d);
        f.render();
    }
    (l = document.querySelector("#leadsReportChart")),
        (d = {
            chart: { height: 157, width: 130, parentHeightOffset: 0, type: "donut" },
            labels: ["Electronic", "Sports", "Decor", "Fashion"],
            series: [45, 58, 30, 50],
            colors: [n.donut.series1, n.donut.series2, n.donut.series3, n.donut.series4],
            stroke: { width: 0 },
            dataLabels: {
                enabled: !1,
                formatter: function (o, e) {
                    return parseInt(o) + "%";
                },
            },
            legend: { show: !1 },
            tooltip: { theme: !1 },
            grid: { padding: { top: -5, bottom: -13 } },
            plotOptions: {
                pie: {
                    donut: {
                        size: "75%",
                        labels: {
                            show: !0,
                            value: {
                                fontSize: "1.5rem",
                                fontFamily: "Public Sans",
                                color: e,
                                fontWeight: 500,
                                offsetY: -15,
                                formatter: function (o) {
                                    return parseInt(o) + "%";
                                },
                            },
                            name: { offsetY: 20, fontFamily: "Public Sans" },
                            total: {
                                show: !0,
                                value: {
                                    fontSize: "1.5rem",
                                    fontFamily: "Open Sans",
                                    color: e,
                                    fontWeight: 500,
                                    offsetY: -15,
                                    formatter: function (o) {
                                        return parseInt(o) + "%";
                                    },
                                },
                                name: { offsetY: 20, fontFamily: "Open Sans" },
                                total: {
                                    show: !0,
                                    fontSize: ".7rem",
                                    label: "1 Week",
                                    color: r,
                                    formatter: function (o) {
                                        return "32%";
                                    },
                                },
                            },
                        },
                    },
                },
            },
        });
    if (null !== l) {
        const u = new ApexCharts(l, d);
        u.render();
    }
    (n = document.querySelector("#reportBarChart")),
        (l = {
            chart: { height: 120, type: "bar", toolbar: { show: !1 } },
            plotOptions: { bar: { barHeight: "60%", columnWidth: "50%", startingShape: "rounded", endingShape: "rounded", borderRadius: 4, distributed: !0 } },
            grid: { show: !1, padding: { top: -35, bottom: -10, left: -10, right: -10 } },
            colors: ['#595cd9', '#595cd9', '#595cd9', '#595cd9', '#595cd9', '#595cd9', '#595cd9'],
            dataLabels: { enabled: !1 },
            series: [{ data: [40, 95, 60, 45, 90, 50, 75] }],
            legend: { show: !1 },
            xaxis: { categories: ["Mo", "Tu", "We", "Th", "Fr", "Sa", "Su"], axisBorder: { show: !1 }, axisTicks: { show: !1 }, labels: { style: { colors: '#595cd9', fontSize: "13px" } } },
            yaxis: { labels: { show: !1 } },
        });
    if (null !== n) {
        const x = new ApexCharts(n, l);
        x.render();
    }
    (d = document.querySelector("#salesAnalyticsChart")),
        (n = {
            chart: { height: 350, type: "heatmap", parentHeightOffset: 0, offsetX: -10, toolbar: { show: !1 } },
            series: [
                {
                    name: "1k",
                    data: [
                        { x: "Jan", y: "250" },
                        { x: "Feb", y: "350" },
                        { x: "Mar", y: "220" },
                        { x: "Apr", y: "290" },
                        { x: "May", y: "650" },
                        { x: "Jun", y: "260" },
                        { x: "Jul", y: "274" },
                        { x: "Aug", y: "850" },
                    ],
                },
                {
                    name: "2k",
                    data: [
                        { x: "Jan", y: "750" },
                        { x: "Feb", y: "3350" },
                        { x: "Mar", y: "1220" },
                        { x: "Apr", y: "1290" },
                        { x: "May", y: "1650" },
                        { x: "Jun", y: "1260" },
                        { x: "Jul", y: "1274" },
                        { x: "Aug", y: "850" },
                    ],
                },
                {
                    name: "3k",
                    data: [
                        { x: "Jan", y: "375" },
                        { x: "Feb", y: "1350" },
                        { x: "Mar", y: "3220" },
                        { x: "Apr", y: "2290" },
                        { x: "May", y: "2650" },
                        { x: "Jun", y: "2260" },
                        { x: "Jul", y: "1274" },
                        { x: "Aug", y: "815" },
                    ],
                },
                {
                    name: "4k",
                    data: [
                        { x: "Jan", y: "575" },
                        { x: "Feb", y: "1350" },
                        { x: "Mar", y: "2220" },
                        { x: "Apr", y: "3290" },
                        { x: "May", y: "3650" },
                        { x: "Jun", y: "2260" },
                        { x: "Jul", y: "1274" },
                        { x: "Aug", y: "315" },
                    ],
                },
                {
                    name: "5k",
                    data: [
                        { x: "Jan", y: "875" },
                        { x: "Feb", y: "1350" },
                        { x: "Mar", y: "2220" },
                        { x: "Apr", y: "3290" },
                        { x: "May", y: "3650" },
                        { x: "Jun", y: "2260" },
                        { x: "Jul", y: "1274" },
                        { x: "Aug", y: "965" },
                    ],
                },
                {
                    name: "6k",
                    data: [
                        { x: "Jan", y: "575" },
                        { x: "Feb", y: "1350" },
                        { x: "Mar", y: "2220" },
                        { x: "Apr", y: "2290" },
                        { x: "May", y: "2650" },
                        { x: "Jun", y: "3260" },
                        { x: "Jul", y: "1274" },
                        { x: "Aug", y: "815" },
                    ],
                },
                {
                    name: "7k",
                    data: [
                        { x: "Jan", y: "575" },
                        { x: "Feb", y: "1350" },
                        { x: "Mar", y: "1220" },
                        { x: "Apr", y: "1290" },
                        { x: "May", y: "1650" },
                        { x: "Jun", y: "1260" },
                        { x: "Jul", y: "3274" },
                        { x: "Aug", y: "815" },
                    ],
                },
                {
                    name: "8k",
                    data: [
                        { x: "Jan", y: "575" },
                        { x: "Feb", y: "350" },
                        { x: "Mar", y: "220" },
                        { x: "Apr", y: "290" },
                        { x: "May", y: "650" },
                        { x: "Jun", y: "260" },
                        { x: "Jul", y: "274" },
                        { x: "Aug", y: "815" },
                    ],
                },
            ],
            plotOptions: {
                heatmap: {
                    enableShades: !1,
                    radius: "6px",
                    colorScale: {
                        ranges: [
                            { from: 0, to: 1e3, name: "1k", color: s },
                            { from: 1001, to: 2e3, name: "2k", color: i },
                            { from: 2001, to: 3e3, name: "3k", color: c },
                            { from: 3001, to: 4e3, name: "4k", color: h },
                        ],
                    },
                },
            },
            dataLabels: { enabled: !1 },
            stroke: { width: 4, colors: [o] },
            legend: { show: !1 },
            grid: { show: !1, padding: { top: -10, left: 10, right: -15, bottom: 0 } },
            xaxis: { labels: { show: !0, style: { colors: r, fontSize: "13px" } }, axisBorder: { show: !1 }, axisTicks: { show: !1 } },
            yaxis: { labels: { style: { colors: r, fontSize: "13px" } } },
            responsive: [
                { breakpoint: 1441, options: { chart: { height: "325px" }, grid: { padding: { right: -15 } } } },
                { breakpoint: 1045, options: { chart: { height: "300px" }, grid: { padding: { right: -50 } } } },
                { breakpoint: 992, options: { chart: { height: "320px" }, grid: { padding: { right: -50 } } } },
                { breakpoint: 767, options: { chart: { height: "400px" }, grid: { padding: { right: 0 } } } },
                { breakpoint: 568, options: { chart: { height: "330px" }, grid: { padding: { right: -20 } } } },
            ],
            states: { hover: { filter: { type: "none" } }, active: { filter: { type: "none" } } },
        });
    if (null !== d) {
        const b = new ApexCharts(d, n);
        b.render();
    }
    (l = document.querySelector("#salesStats")),
        (d = {
            chart: { height: 340, type: "radialBar" },
            series: [75],
            labels: ["Sales"],
            plotOptions: {
                radialBar: {
                    startAngle: 0,
                    endAngle: 360,
                    strokeWidth: "70",
                    hollow: { margin: 50, size: "75%", image: window.location.origin + "/admin/assets/img/arrow-star.png", imageWidth: 65, imageHeight: 55, imageOffsetY: -35, imageClipped: !1 },
                    track: { strokeWidth: "50%", background: a },
                    dataLabels: {
                        show: !0,
                        name: { offsetY: 60, show: !0, color: r, fontSize: "15px" },
                        value: {
                            formatter: function (o) {
                                return parseInt(o) + "%";
                            },
                            offsetY: 20,
                            color: e,
                            fontSize: "32px",
                            show: !0,
                        },
                    },
                },
            },
            fill: { type: "solid", colors: '#595cd9' },
            stroke: { lineCap: "round" },
            states: { hover: { filter: { type: "none" } }, active: { filter: { type: "none" } } },
        });
    if (null !== l) {
        const m = new ApexCharts(l, d);
        m.render();
    }
})();
