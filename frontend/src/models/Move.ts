export class Move {
    userId: number
    type: string
    position: string

    constructor(data: any) {
        this.userId = data?.userId
        this.type = data?.type
        this.position = data?.position
    }
}