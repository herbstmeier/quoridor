var y=Object.defineProperty;var p=(s,e,i)=>e in s?y(s,e,{enumerable:!0,configurable:!0,writable:!0,value:i}):s[e]=i;var r=(s,e,i)=>(p(s,typeof e!="symbol"?e+"":e,i),i);class l{constructor(e){r(this,"gameId");r(this,"createdBy");r(this,"createdAt");r(this,"nPlayers");r(this,"state");r(this,"playerTop");r(this,"playerBottom");r(this,"playerLeft");r(this,"playerRight");r(this,"winner");r(this,"bricks");this.gameId=e==null?void 0:e.gameId,this.createdBy=e==null?void 0:e.createdBy,this.createdAt=e==null?void 0:e.createdAt,this.nPlayers=e==null?void 0:e.nPlayers,this.state=e==null?void 0:e.state,this.playerTop=e==null?void 0:e.playerTop,this.playerBottom=e==null?void 0:e.playerBottom,this.playerLeft=e==null?void 0:e.playerLeft,this.playerRight=e==null?void 0:e.playerRight,this.winner=e==null?void 0:e.winner,this.bricks=e==null?void 0:e.bricks}hasUser(e){return this.playerTop===e||this.playerBottom===e||this.playerLeft===e||this.playerRight===e}}export{l as G};