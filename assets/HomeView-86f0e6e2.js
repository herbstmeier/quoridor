import{G as L}from"./Game-9af6c930.js";import{d as _,_ as p,r,o as t,c as a,w as y,a as s,t as c,b as d,n as k,m as I,e as l,F as G,f as v,g as w,u as $}from"./index-3f31a3d8.js";const b=_({name:"GameListItem",props:{game:{type:L,required:!0}}});function C(e,o,m,g,f,h){const n=r("router-link");return t(),a(n,{to:{name:"game",params:{id:e.game.gameId}},class:"list-item-container"},{default:y(()=>[s("div",null,c(e.game.gameName),1),s("div",null,c(),1),s("div",null,c(e.game.nPlayers),1)]),_:1},8,["to"])}const V=p(b,[["render",C]]),A=_({name:"GameList",props:{title:String,icon:String,games:{type:Array,required:!0}},components:{GameListItem:V},methods:{}}),O={class:"list-card"},U={class:"list-title"},B={key:1,class:"font-s"},N={class:"list-container"},S=s("div",{class:"list-item-container top-row"},[s("div",null,"name"),s("div",null,"author")],-1);function q(e,o,m,g,f,h){const n=r("font-awesome-icon"),i=r("GameListItem");return t(),d("div",O,[s("div",U,[e.icon?(t(),a(n,k(I({key:0},{icon:e.icon})),null,16)):l("",!0),e.title?(t(),d("div",B,c(e.title),1)):l("",!0)]),s("div",N,[S,(t(!0),d(G,null,v(e.games,u=>(t(),a(i,{key:u.game_id,game:u},null,8,["game"]))),128))])])}const H=p(A,[["render",q]]),P=_({name:"UserListItem",props:{user:{type:Object,required:!0}}});function F(e,o,m,g,f,h){const n=r("router-link");return t(),a(n,{to:{name:"user",params:{id:e.user.userId}},class:"list-item-container"},{default:y(()=>[s("div",null,c(e.user.username),1),s("div",null,c(e.user.wins),1)]),_:1},8,["to"])}const j=p(P,[["render",F]]),z=_({name:"LeaderboardComponent",components:{UserListItem:j},data(){return{users:new Array}},mounted:async function(){this.$axios.get("/user").then(e=>{this.users=e.data.sort((o,m)=>o.wins-m.wins)})}}),D={class:"list-card"},E={class:"list-title"},J={class:"list-container"},K=s("div",{class:"list-item-container top-row"},[s("div",null,"username"),s("div",null,"wins")],-1);function M(e,o,m,g,f,h){const n=r("font-awesome-icon"),i=r("UserListItem");return t(),d("div",D,[s("div",E,[w(n,{icon:"fas fa-trophy"})]),s("div",J,[K,(t(!0),d(G,null,v(e.users,u=>(t(),a(i,{user:u,key:u.userId},null,8,["user"]))),128))])])}const Q=p(z,[["render",M]]),R=_({name:"HomeView",data(){return{createdGames:new Array,ongoingGames:new Array,userOngoingGames:new Array}},components:{GameList:H,LeaderboardComponent:Q},methods:{},mounted:async function(){this.$axios.get("/game?state=0").then(e=>{this.createdGames=e.data}),this.$axios.get("/game?state=1").then(e=>{this.ongoingGames=e.data,$.isSet()&&(this.userOngoingGames=this.ongoingGames.filter(o=>o.hasUser($.data.userId)))})}});const T={class:"home-container"};function W(e,o,m,g,f,h){const n=r("LeaderboardComponent"),i=r("GameList");return t(),d("div",T,[w(n),e.userOngoingGames.length>0?(t(),a(i,{key:0,games:e.userOngoingGames,icon:"fas fa-chess-board"},null,8,["games"])):l("",!0),e.createdGames.length>0?(t(),a(i,{key:1,games:e.createdGames,icon:"fas fa-hat-cowboy"},null,8,["games"])):l("",!0),e.ongoingGames.length>0?(t(),a(i,{key:2,games:e.ongoingGames,icon:"fas fa-binoculars"},null,8,["games"])):l("",!0)])}const Z=p(R,[["render",W]]);export{Z as default};