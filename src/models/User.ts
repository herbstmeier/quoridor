export class User {
    userId: number
    username: string
    wins: number
    theme: string
    boardHue: number

    constructor(userData: any) {
        this.userId = userData?.userId
        this.username = userData?.username
        this.wins = userData?.wins
        this.theme = userData?.theme
        this.boardHue = userData?.boardHue
    }

    static getFake() {
        return new User({
            userId: 0,
            username: 'bob',
            wins: 4,
            theme: 'light',
            boardHue: 22
        })
    }
}