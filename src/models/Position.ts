export class Position {
    userId: number
    gameId: number
    position: string

    constructor(data: any) {
        this.userId = data?.userId
        this.gameId = data?.gameId
        this.position = data?.position
    }
}