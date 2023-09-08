import { library } from '@fortawesome/fontawesome-svg-core'
import { faTrophy, faChessBoard, faHatCowboy, faSun, faMoon, faBinoculars, faPlus } from '@fortawesome/free-solid-svg-icons'

export function faSetup() {
    library.add(faTrophy, faChessBoard, faHatCowboy, faSun, faMoon, faBinoculars, faPlus)
}
