const smoothGraph = {
    container: null,
    svg: null,
    defs: null,
    width: null,
    height: null,
    dataHeight: null,
    xSpacing: null,
    ySpacing: null,
    pathSmoothing: null,
    defs: null,

    new: function ({ container = null, heightInPx = 100, dataHeight = 100 }) {
        this.errorCondition(container === null, 'No target container was specified.\n Use querySelector syntax to target a container element:\n smoothGraph.new({container: "#my-container"});\n');

        this.setContainer(container);
        this.setDimensions(heightInPx, dataHeight);

        const svg = this.createSVG(this.width, this.height);

        this.svg = this.container.appendChild(svg);
        this.appendMaskToSvg();
    },

    draw: function ({ dataPoints = null, color = 'black', strokeWidth = 1, pathSmoothing = 0 }) {
        this.errorCondition(dataPoints === null, 'No data points were entered for the graph.\n Specify the data points in an array:\n smoothGraph.draw({dataPoints: [1, 2, 3, 4]});\n');

        this.setXSpacing(dataPoints.length);
        this.setPathSmoothing(pathSmoothing);

        ['fill', 'stroke'].forEach(drawType => {
            const attributeLabel = (drawType === 'fill') ? 'mask' : 'stroke-width';
            const attributeValue = (drawType === 'fill') ? 'url(#gradient-mask)' : strokeWidth;

            const d = this.createPathPoints(dataPoints, drawType);

            const path = document.createElementNS('http://www.w3.org/2000/svg', 'path');
            path.setAttributeNS(null, 'd', d);
            path.setAttributeNS(null, `${drawType}`, color);
            path.setAttributeNS(null, attributeLabel, attributeValue);

            this.svg.appendChild(path);
        });
    },

    createSVG: function (width, height) {
        const svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
        svg.setAttribute('xmlns', 'http://www.w3.org/2000/svg');
        svg.setAttribute('fill', 'none');
        svg.setAttribute('viewBox', `0 0 ${this.width} ${this.height}`);

        return svg;
    },

    appendMaskToSvg: function () {
        this.appendDefsToSvg();
        this.defs.innerHTML = `<linearGradient id="gradient" gradientTransform="rotate(90)"><stop offset="0" stop-color="white" stop-opacity="0.35" /><stop offset="1" stop-color="white" stop-opacity="0" /></linearGradient><mask id="gradient-mask"><rect x="0" y="0" width="${this.width}" height="${this.height}" fill="url(#gradient)" /></mask>`;
    },

    appendDefsToSvg: function () {
        const defs = document.createElementNS('http://www.w3.org/2000/svg', 'defs');
        this.defs = this.svg.appendChild(defs);
    },

    createPathPoints: function (dataPoints, drawType) {
        let d = '';
        for (let i = 0; i < dataPoints.length; i++) {
            let marker = i === 0 ? 'M' : 'L';
            let x1 = i * this.xSpacing;
            let y1 = this.height - (dataPoints[i] * this.ySpacing);
            let x2 = (i + 1) * this.xSpacing;
            let y2 = this.height - (dataPoints[i + 1] * this.ySpacing);

            if (i !== dataPoints.length - 1) {
                d += `${marker} ${x1} ${y1} C ${x1 + this.pathSmoothing} ${y1} ${x2 - this.pathSmoothing} ${y2} ${x2} ${y2} `;
            }
        }

        if (drawType === 'fill') {
            d += `L ${this.width} ${this.height} L 0 ${this.height} L 0 ${this.height - (dataPoints[0] * this.ySpacing)}`;
        }

        return d;
    },

    setContainer: function (container) {
        this.container = document.querySelector(container);
    },

    setDimensions: function (heightInPx, dataHeight) {
        this.width = this.container.offsetWidth;
        this.height = heightInPx;
        this.dataHeight = dataHeight;
        this.ySpacing = heightInPx / dataHeight;
    },

    setXSpacing: function (dataPointsLength) {
        this.xSpacing = this.width / (dataPointsLength - 1);
    },

    setPathSmoothing: function (smoothingAmount) {
        this.pathSmoothing = (this.xSpacing / 10) * smoothingAmount;
    },

    errorCondition: function (condition, errorMessage) {
        if (condition) {
            throw new Error(errorMessage);
        }
    }
};

// Function to initialize the smoothGraph after the DOM is fully loaded
function initializeSmoothGraph() {
    smoothGraph.new({
        container: '#graph-container',
        heightInPx: 350,
        dataHeight: 100
    });

    smoothGraph.draw({
        dataPoints: [20, 60, 40, 10, 80, 50, 10],
        color: '#f99048',
        strokeWidth: 1,
        pathSmoothing: 5
    });

    smoothGraph.draw({
        dataPoints: [10, 40, 20, 10, 70, 90, 10],
        color: '#f99048',
        strokeWidth: 4,
        pathSmoothing: 5
    });
}

// Attach the initializeSmoothGraph function to the window.onload event
window.onload = initializeSmoothGraph;
