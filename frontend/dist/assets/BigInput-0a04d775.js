import{d as i,i as l,_ as u,o as a,b as o,a as r,t as n,j as d,v as p,m,e as c}from"./index-7c747679.js";const f=i({name:"BigInput",props:{label:String,val:Object,customError:{type:String,default:""}},data(){var e;return{value:null,fieldName:(e=this.label)==null?void 0:e.replace(/[^a-zA-Z]/g,""),error:""}},emits:{change:null,validation:null},methods:{async onInput(e){const t=e.target;this.$emit("change",t.value),await l(),t.checkValidity()?(this.$emit("validation",!0),this.error=""):(this.$emit("validation",!1),this.error=t.validationMessage.toLocaleLowerCase()??"")}},computed:{errorMsg(){return this.customError?this.customError:this.error}}});const g={class:"big-input-container"},v=["for"],h=["name"],_={key:0,class:"field-error font-xs"};function b(e,t,y,B,I,$){return a(),o("div",g,[r("label",{class:"field-label font-s",for:e.fieldName},n(e.label),9,v),d(r("input",m({class:"field-input font-s",name:e.fieldName},e.val,{"onUpdate:modelValue":t[0]||(t[0]=s=>e.value=s),onInput:t[1]||(t[1]=(...s)=>e.onInput&&e.onInput(...s))}),null,16,h),[[p,e.value]]),e.errorMsg?(a(),o("span",_,n(e.errorMsg),1)):c("",!0)])}const M=u(f,[["render",b]]);export{M as B};
