export class Bitmatrix {
    matrix: number[][] = []
    N: number = 0

    constructor(N: any) {
        this.N = N
        this.initMatrix()
    }

    initMatrix() {
        this.matrix = []
        for (let y = 0; y < this.N; y++) {
            this.matrix[y] = []
            for (let x = 0; x < this.N; x++) {
                this.matrix[y][x] = 0
            }
        }
    }

    fillMatrix(logicFn: (x: number, y: number) => number) {
        for (let y = 0; y < this.N; y++) {
            for (let x = 0; x < this.N; x++) {
                this.matrix[y][x] = logicFn(x, y)
            }
        }
    }
}