"use strict";(globalThis.webpackChunkcreate_block_theme=globalThis.webpackChunkcreate_block_theme||[]).push([[905],{7905:(t,s,e)=>{e.r(s),e.d(s,{DSIG:()=>n});var i=e(2592);class n extends i.x{constructor(t,s){const{p:e}=super(t,s);this.version=e.uint32,this.numSignatures=e.uint16,this.flags=e.uint16,this.signatureRecords=[...new Array(this.numSignatures)].map((t=>new r(e)))}getData(t){const s=this.signatureRecords[t];return this.parser.currentPosition=this.tableStart+s.offset,new a(this.parser)}}class r{constructor(t){this.format=t.uint32,this.length=t.uint32,this.offset=t.Offset32}}class a{constructor(t){t.uint16,t.uint16,this.signatureLength=t.uint32,this.signature=t.readBytes(this.signatureLength)}}}}]);