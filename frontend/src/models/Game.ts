export class Game {
    gameId: number
    gameName: string
    createdBy: number
    createdAt: string
    nPlayers: number
    state: number
    playerTop: number
    playerBottom: number
    playerLeft: number
    playerRight: number
    winner: number
    bricks: string

    constructor(data: any) {
        this.gameId = data?.gameId
        this.gameName = data?.gameName
        this.createdBy = data?.createdBy
        this.createdAt = data?.createdAt
        this.nPlayers = data?.nPlayers
        this.state = data?.state
        this.playerTop = data?.playerTop
        this.playerBottom = data?.playerBottom
        this.playerLeft = data?.playerLeft
        this.playerRight = data?.playerRight
        this.winner = data?.winner
        this.bricks = data?.bricks
    }

    hasUser(userId: number) {
        return this.playerTop === userId || this.playerBottom === userId || this.playerLeft === userId || this.playerRight === userId
    }
}