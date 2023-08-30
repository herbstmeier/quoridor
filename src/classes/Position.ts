export default class Position {
    x: number
    y: number

    constructor(x: number, y: number) {
        this.x = x
        this.y = y
    }

    static isEqual(pos1: Position, pos2: Position) {
        return pos1.x === pos2.x && pos1.y === pos2.y
    }

    equals(pos: Position) {
        return this.x === pos.x && this.y === pos.y
    }

    go(posX: number, posY: number) {
        this.x = posX
        this.y = posY
    }

    clone() {
        return new Position(this.x, this.y)
    }

    toString() {
        return `[x: ${this.x}, y: ${this.y}]`
    }
}