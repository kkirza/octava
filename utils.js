/*
 * pure JS utils, based on datutl.js, 23.04.19
 * Date objects
 *   checkDate(strDate)
 *   addDays
 *   addMonths
 *   dateToIso   dd.mm.yy to yymmdd
 *   datAsD4(dt)      Date() to 'dd.mm.yyyy'
 *   datAsD4T(dt)     Date() to 'dd.mm.yyyy HH:MM:SS'
 *   datFromD4T(dat)  'dd.mm.yyyy HH:MM:SS' to Date() or null
 * String
 *   N0         prepend 0 before .
 *   lpad(snum, n)   left-pad with zeros
 *   isNumber(str)
 *   isInteger(str)
 *   trimString(str,nLen)
 *   String.chop()
 * select form object
 *   selectVal(elem)
 *   selectTxt(elem)
 *   setSelectByVal(elem, v)
 *   setSelectByTxt(elem, v)
 *   radioVal(rname)
 * conversion
 *   escape2(str)
 *   esc(str, flg)
 *   toHex(num, minlen)
 * sort
 *   add_sorting(idHeadTr, idBody,clsTH, picAsc,picDesc, tagdata,fnpost,flg)
 *              fnpost(iCol)
 * DOM elements
 *   addClass(val, add)    both return modified val
 *   removeClass(val, rmv)
 *   fullOffset(elem)
 *   indexInColl(coll,elem)
 * AJAX
 *   ajax_load(url, pars, oncomplete)
 *   ajax_upload(url, efile, params, oncomplete, tmout)
 *   make_buddy( elem, flg, cssTab, clsTab, url, fncset, fncdel)
 * sticky header
 *   make_stick_header(shead, dest)
*/

function checkDate(strDat)
{
  if (strDat.length == 0)
    return ''
  var m= strDat.match( /([0-3]?\d)\.([01]\d)\.(20\d{2})( [012]\d:[0-5]\d:[0-5]\d)?/)
  if( m != null ) {
    var arM= new Array(31,29,31,30,31,30,31,31,30,31,30,31),
      mth= m[2] < 13 ? (m[2] == 0 ? 1 : parseInt(m[2])) : 12,
      d= m[1] <= arM[mth-1] ? (m[1]==0 ? "01" : m[1]) : arM[mth-1]
    return d+"."+lpad(mth,2)+"."+m[3]+(m[4] ? m[4] : "")
  }
  else
    return lpad(dt.getDate(),2)+"."+lpad(1+dt.getMonth(),2)+"."+dt.getFullYear()
}

function addDays(strDat, nDays)  // dd.mm.yyyy
{
  // strDat= current if null, 29.01.18
  var aPart= strDat.split('.')
  if( (aPart.length == 3 || strDat=="") && nDays != 0 ) {
      var dt= strDat=="" ? new Date() : new Date(aPart[2],aPart[1]-1,aPart[0]), m
      tm= dt.getTime() + nDays * 24*3600000;   // msec
      dt.setTime(tm)
      m= dt.getMonth()+1
      return dt.getDate()+'.'+(m > 9 ? m : "0"+m)+'.'+dt.getFullYear()
  }
  return strDat;
}

function addMonths(strDat, nMths)  // dd.mm.yyyy
{
  var aPart= strDat.split('.')
  if( aPart.length == 3 && nMths != 0 ) {
    while( nMths >= 12 ) {
        aPart[2]--; nMths-= 12;
    }
    while( nMths <= -12 ) {
        aPart[2]++; nMths+= 12;
    }
    if( nMths > 0 ) {
        if( aPart[1] + nMths > 12 ) {
            aPart[2]++; aPart[1]= parseInt(aPart[1]) + nMths - 12;
        }
        else
            aPart[1]= parseInt(aPart[1]) + nMths
    }
    else {
        if( aPart[1] + nMths < 0 ) {
            aPart[2]--; aPart[1]= parseInt(aPart[1]) + nMths + 12;
        }
        else
            aPart[1]= parseInt(aPart[1]) + nMths
    }
    return aPart[0]+'.'+aPart[1]+'.'+aPart[2]
  }
  return strDat;
}

function dateToIso(strDat)  // dd.mm.yy[yy] => [yy]yymmdd, 17.08.18
                          // can be 'dd.mm.yyyy HH:MM:SS' => yyyymmddHHMMSS, 26.04.19
{
  var i0= strDat.indexOf(" "),
    aD= (i0 < 0 ? strDat : strDat.substring(0,i0)).split('.'),
    dt= aD[2]+(aD[1].length==1 ? "0":"")+aD[1]+(aD[0].length==1 ? "0":"")+aD[0],
    aT= (i0 > 0 ? strDat.substring(i0+1).split(':') : null),
    tim= (aT ? ""+aT[0]+aT[1]+aT[2] : "")
  return dt+tim
}

function datAsD4(dt)  // Date() to 'dd.mm.yyyy'
{
  var dtm= (dt && dt.getDate ? dt : new Date()),
    m= dtm.getMonth()+1
  return lpad2(dtm.getDate())+"."+lpad2(m)+"."+dtm.getFullYear();
}

function datAsD4T(dt)  // Date() to 'dd.mm.yyyy HH:MM:SS'
{
  var dtm= (dt && dt.getDate ? dt : new Date()),
    m= dtm.getMonth()+1, h= dtm.getHours(), i= dtm.getMinutes(),
    s= dtm.getSeconds()
  return lpad2(dtm.getDate())+"."+lpad2(m)+"."+dtm.getFullYear()+
    " "+lpad2(h)+":"+lpad2(i)+":"+lpad2(s);
}

function datFromD4T(dat)  // 'dd.mm.yyyy HH:MM:SS' to Date() or null
{
  var m= dat.match( /(\d\d?)\.(\d\d?)\.(\d{4}) (\d\d):(\d\d):(\d\d)/)
  return m ? new Date(m[3],m[2]-1,m[1],m[4],m[5],m[6]) : null
}


function N0( num )
{
  return (""+num).substr(0,1) == "." ? "0"+num : num;
}

function lpad2( num) // 20.06.22
{
  return num < 10 ? "0"+num : num
}

function lpad( num, n)  // pad zeros left up to n-length, 26.03.22
{
  var snum=""+num, nadd= (snum.length < n ? n-snum.length : 0), sadd=""
  for(var i=0; i < nadd; i++) sadd+= "0"
  return sadd+snum
}  

function isNumber( str )
{
    return ((""+str).search( /^\d+\.?\d*$/ ) < 0 ? 0 : 1);
}

function isInteger( str )
{
    return (""+str).search( /^\d+$/ ) < 0 ? 0 : 1;
}

function trimString( str, nLen)
{
    return (""+str).substring(0,nLen);
}

// extend String
String.prototype.chop= function(sfx) {
  if( sfx && this.endsWith(sfx) )
    return this.substring(0,this.length-sfx.length)
  return (this ? this.substring(0,this.length-1) : "")
}


function selectVal( eSel, idx)
{
  // extend with idx, 19.07.21
  var ix= (typeof idx == "undefined" ? eSel.selectedIndex : idx)
  return (ix<0 ? "" : eSel.options[ix].value)
}

function selectTxt( eSel, idx)
{
  var ix= (typeof idx == "undefined" ? eSel.selectedIndex : idx)
  return (ix<0 ? "" : eSel.options[ix].text)
}

function selectVal2Idx( eSel, val)  // 19.07.21
{
  var n= eSel.options.length
  for(i=0; i < n; i++) {
    if( eSel.options[i].value == val ) {
      return i
    }
  }
  return -1;
}

function setSelectByVal(eSel, v)  // 30.12.17
{
  var n= eSel.options.length
  for(i=0; i < n; i++) {
    if( eSel.options[i].value == v ) {
      eSel.selectedIndex= i
      return 1
    }
  }
  return 0
}

function setSelectByTxt(eSel, v)  // 30.12.17
{
  var n= eSel.options.length
  for(i=0; i < n; i++) {
    if( eSel.options[i].text == v ) {
      eSel.selectedIndex= i
      return 1
    }
  }
  return 0
}

function radioVal(rname)  // 15.07.19
{
  var aE= document.getElementsByName(rname)
  for(i=0; i < aE.length; i++)
    if( aE[i].checked ) return aE[i].value
  return ""
}

function escape2(str)  // 24.01.18
{
  var s= escape(str), seek= ["+","-","/","*"], repl=["%2b","%2d","%2f","%2a"]
  for( i=0; i < 4; i++)
    s= s.replace(seek[i],repl[i])
  return s
}

function esc(str, flg)
{
  // translate unicode symbols in str to %xx or %uxxxx
  // independent of escape(), 29.04.19
  // flg = 1: to convert space + - / & % #
  // unicode    А-Я 0410-042F, а-я 0430-044F, Ё 0401 ё 0451
  //  win-1251      192-223,        224-255      168    184
  var aSym= [], oSpec= {0x20 :" ", 0x25:"%", 0x26:"&", 0x2b:"+", 0x2f:"/", 0x23:"#"}
  for(i=0; i < str.length; i++) {
    var kod= str.charCodeAt(i),
      sym= ((0x0410 <= kod && kod <= 0x044F) || kod == 0x0401
        || kod == 0x0451 ? "%u"+toHex(kod,4) :
        (kod < 128 ? (kod in oSpec && flg>0 ? "%"+toHex(kod) : str.charAt(i))  : "_"))
    aSym.push(sym)
  }
  return aSym.join("")
}

function toHex( num, minlen)   // 23.04.15  convert int to hex(string)
{
  var shex= "", n= parseInt(num), m=0,
  minL= parseInt(minlen),
  digit= ['0','1','2','3','4','5','6','7','8','9','a','b','c','d','e','f']
  while( n > 0 ) {
      var d= n % 16
      shex= digit[d] + shex
      n= (n - d)/16
      m++
  }
  while( minL > m ) {
      shex= "0"+shex
      m++
  }
  return shex ? shex : "0"
}


// re-design: addClass(val,add)=newCls, 27.08.19
//  => addClass(elem,add)=newCls
function addClass(elem, add)
{
  if( !elem || !elem.tagName ) return ""
  var val= elem.className, aCls= add.split(/ +/); // 28.05.21
  for(var i=0; i < aCls.length; i++) {
    if( val.indexOf(aCls[i]) < 0 ) {
      val+= " "+aCls[i];  elem.className= val
    }
  }
  return val
}

// re-design: removeClass(val,rmv)=newCls, 27.08.19
//  => removeClass(elem,rmv)=newCls
function removeClass(elem, rmv)
{
  if( !elem || !elem.tagName ) return ""
  var val= elem.className
  if( rmv ) {
    var re= new RegExp(" *\\b"+rmv+"\\b");
    val= val.replace(re,""); elem.className= val
  }
  return val
}

function fullOffset(e)
{
  var x= 0, y=0, elem= e
  while( elem && elem.tagName != "BODY" ) {
    if( e != elem && window.getComputedStyle(elem)["position"]!="static" ) // 2.04.22
       break;
    x+= parseInt(elem.offsetLeft)
    y+= parseInt(elem.offsetTop)
    elem= elem.offsetParent
  }
  return {left: x, top: y}
}

function indexInColl(coll,elem) // 5.11.20
{
  for(var i=0; i < coll.length; i++)
    if( coll[i] == elem ) return i;
  return -1;
}

// DOM helpers

function etext(elemId)  // 24.09.19
{
  var e=document.getElementById(elemId)
  if( !e ) console.log("elemId='"+elemId+"' not found")
  return e.textContent
}
function eattr(elemId,atrname)
{
  return document.getElementById(elemId).getAttribute(atrname)
}
function ehtml(elemId)  // 17.04.21
{
  return document.getElementById(elemId).innerHTML
}
function etextset(elemId,val)  // 11.02.20
{
  document.getElementById(elemId).textContent= val
}
function eattrset(elemId,atrname,val)
{
  document.getElementById(elemId).setAttribute(atrname,val)
}
function ehtmlset(elemId,val)  // 12.04.21
{
  document.getElementById(elemId).innerHTML= val
}


// add sorting feature to any table, 26.09.20

function add_sorting(idHeadTr, idBody,clsTH, picAsc,picDesc, tagdata,fnpost,flg)
//  picAsc/picDesc= path to icons down/up to show in header cell
//  tagdata: in tbody <td tagdata="sort-val">show-val</td>
//  fnpost: proc to call after sorting, 1.10.20
//  flg: 0 case insensitive, 1 case sensitive, 17.10.20
{
  var eTr= document.getElementById(idHeadTr), tb= document.getElementById(idBody)
  if( eTr && tb ) {
    eTr.setAttribute("sortb", idBody)
    eTr.setAttribute("sortcol", "");
    eTr.setAttribute("sortdir", "");
    eTr.setAttribute("pica", picAsc)
    eTr.setAttribute("picd", picDesc)
    if( tagdata )
      eTr.setAttribute("tagd", tagdata)
    var  ath= eTr.children
    for(i=0; i < ath.length; i++) {
      if (ath[i].onclick) continue
      addClass(ath[i], clsTH)
      ath[i].onclick= on_sort
    }
    sort_opt.sensitivity= (flg ? "variant" : "base")
    if( fnpost )
      eTr.fnpost= fnpost
  }
}

var sort_opt= { }
function cmp_num_asc(a, b)  { return a[0] - b[0];}
function cmp_num_desc(a, b)  { return b[0] - a[0];}
function cmp_str_asc(a, b) { return a[0].localeCompare(b[0],"ru", sort_opt) }
function cmp_str_desc(a, b) { return b[0].localeCompare(a[0],"ru", sort_opt) }

function on_sort(ev)
{
  var aRow= [], th= ev.target, eTr= th.parentNode, iCol= -1
  while( eTr.tagName != "TR" && eTr.tagName != "BODY" ) eTr= eTr.parentNode
  if( eTr.tagName != "TR" ) return
  var
    iColS= eTr.getAttribute("sortcol"), iDirS= eTr.getAttribute("sortdir"),
    tagd= eTr.getAttribute("tagd"),
    tb= document.getElementById(eTr.getAttribute("sortb")),
    ath= eTr.children
  if( tb ) {
    iCol= indexInColl(ath, th); // find col to sort by
    if( iCol >= 0 ) { // sort by col with index iCol, direction iDir
      var iDir= ( iColS == iCol ? -iDirS : 1), arr= [], atr= tb.children,
        ePic= document.createElement("IMG"),
        cont= "",
        bColNum= true;
      for(i=0; i < atr.length; i++) {
        var atd= atr[i].children,
          val= tagd ? atd[iCol].getAttribute(tagd) : null,
          s= val ? val : atd[iCol].textContent,
          mNum= s.match( /^-?([0-9]+(\.[0-9]+)?|\.[0-9]+)$/),
          v= (mNum != null ? parseFloat(s) : s)
        if( mNum == null ) bColNum= false
        arr.push( [v, atr[i].outerHTML])
      }
      arr.sort( iDir>0 ? (bColNum ? cmp_num_asc : cmp_str_asc)
                      : (bColNum ? cmp_num_desc : cmp_str_desc))
      for(i=0; i < arr.length; i++)
        cont+= arr[i][1]
      tb.innerHTML= cont
      if( iColS )
        ath[iColS].removeChild(ath[iColS].lastElementChild)
      ePic.setAttribute("src", eTr.getAttribute(iDir > 0 ? "pica" : "picd"))
      th.appendChild(ePic)
      eTr.setAttribute("sortcol", iCol)
      eTr.setAttribute("sortdir", iDir)
      if( eTr.fnpost )  // if callback, 1.10.20
        eTr.fnpost(iCol)
    }
  }
}

// cookies, 20.05.21

function setCookie(tag, val, daysoff)
{
  if( document.cookie ) {
    var d= new Date(), tm= d.getTime()+(daysoff ? daysoff : 1)*24*3600000,
      d0= new Date(tm), sdt= d0.toUTCString()
    document.cookie= tag+"="+encodeURIComponent(val)+"; expires "+sdt+"; path=/;"
  }
}
function getCookie(tag)
{
  if( document.cookie ) {
    var v= ""+document.cookie, re= new RegExp(tag+"=([^;]+);"), m= v.match(re)
    return decodeURIComponent(m[1])
  }
  return ""
}


// AJAX stuff, force 1 req at a time

var xmlhttpReq, xhropt= { running: false}, tmoId;

function ajax_load(url, pars, oncomplete)
//      pars= {method: POST|_GET_, out: _text_|xml, timeout: sec, other actual }
//      oncomplete(resp, statcode,status)
{
  if( xhropt.running ) {
    if (!xhropt.noalert) alert("предыдущ.запрос не завершен"); 
    return 1
  }
  var data="", urlAct= url
  xhropt.method= (pars.method ? pars.method.toUpperCase() : "GET")
  xhropt.timeout= ( pars.timeout && pars.timeout > 0 ? pars.timeout : 30)
  xhropt.out= (pars.out ? pars.out : "text")
  xhropt.url= url
  xhropt.complete= oncomplete
  xhropt.noalert = pars.noalert
  if( xhropt.method == "POST" ) {
    data= new FormData()
    for(p in pars)
      data.append(""+p, pars[p])
  }
  else {
    for(p in pars) {
      if( p!="method" && p!="out" && p!="timeout" && p!="noalert" )
        data+= "&"+p+"="+pars[p]
    }
    if( data != "")
      urlAct+= "?"+data.substr(1)
  }
  if( xmlhttpReq ) ;
  else
    xmlhttpReq= new XMLHttpRequest()
  xmlhttpReq.onreadystatechange= ajax_reply
  xmlhttpReq.open(xhropt.method, urlAct, true); // async
  xmlhttpReq.send(xhropt.method=="GET" ? null : data)
  xhropt.running= true
  tmoId= setTimeout(ajax_abort, xhropt.timeout*1000) // msec
}

function ajax_upload(url, efile, params, oncomplete, tmout) // 18.10.19
//      revised 10.07.21: efile,params
//      oncomplete(resp, statcode,status)
{
  if( xhropt.running ) {
    alert("предыдущ.запрос не завершен"); return
  }
  xhropt.url= url
  xhropt.method="POST"
  xhropt.timeout= (tmout > 0 ? tmout : 30)
  xhropt.out= "text"
  xhropt.complete= oncomplete
  data= new FormData()
  if( efile && efile.files ) {
    for(var i=0; i < efile.files.length; i++)
      data.append("file"+i, efile.files[i])
    for( p in params)
      data.append(""+p, params[p])
  }
  else {
    alert("неверный указатель на файлы"); return
  }
  if( xmlhttpReq ) ;
  else
    xmlhttpReq= new XMLHttpRequest()
  xmlhttpReq.onreadystatechange= ajax_reply
  xmlhttpReq.open(xhropt.method, url, true); // async
  xmlhttpReq.send(data)
  xhropt.running= true
  tmoId= setTimeout(ajax_abort, xhropt.timeout*1000) // msec
}

function ajax_abort(silent=0)
{
  xmlhttpReq.abort()
  if (!silent) alert("Время запроса истекло")
  clearTimeout(tmoId); tmoId= null
  xhropt.running= false
}

function ajax_reply()
{
  // readyState: 0 unsent,
  //  1 opened (open has been called),
  //  2 headers got (send has been called and headers/status available)
  //  3 loading  (responseText holds partial data)
  //  4 done  (operation complete)
  if( xmlhttpReq.readyState >= 2 && tmoId ) {
    clearTimeout(tmoId); tmoId= null
  }
  if( xmlhttpReq.readyState == 4 ) {
    xhropt.running= false
    if( xhropt.complete ) {
      var resp= xhropt.method=="xml" ? xmlhttpReq.responseXML : xmlhttpReq.responseText
      xhropt.complete(resp, xmlhttpReq.status, xmlhttpReq.statusText)
    }
  }
}


function make_buddy( elem, flg, cssTab, clsTab, url, fncset, fncdel)
{
  // make buddy elem for elem, just before elem
  // flg= +1 popup, +2 elem=id,
  // cssTab= "prp: val; .." for table in buddy
  // clsTab = classname for table
  // fnset(e,val) = function which is called when item is clicked
  // url is sent with params: par + pat + urlparm
  // fndel(e) = function which is called when delete is pressed
  // later client code can set e.data('urlpar') to 'p1=2' or sim.  18.04.14
  // fnset(e, val, prm) = function to be called when item is clicked,
  //                      last prm is optional,  02.12.16
  var e= (flg & 2 ? document.getElementById(elem) : elem),
    ePrev= e.parentNode.previousElementSibling,
    eBudd= null,
    cls= (clsTab ? ' class="'+clsTab+'"' : ""),
    sty= (cssTab ? ' style="'+cssTab+'"' : "")
  if( ePrev && ePrev.tagName == "DIV" && ePrev.className == "bdy" ) // modify it, 17.06.19
      eBudd= ePrev
  else {
    eBudd= document.createElement("DIV")
    eBudd.className= "bdy"
    eBudd.style.position= "absolute"
    eBudd.style.display= "none"
    e.parentNode.insertBefore(eBudd, e)
  }
  eBudd.innerHTML= "<table "+cls+sty+"></table>"
  e.data= {fnset: fncset, fndel: fncdel, urlpar: "", left: "", top: "",prv:"", fl: flg}

  // tablets keydown/keyup events have no usual properties, so use input 02.02.20
  e.oninput= function(ev) {
    // called *after* element has been modified
    if( this.value != this.data.prv ) {
      this.data.prv= this.value
      if( this.value == "" ) { // hide
        this.previousElementSibling.style.display= "none"
        var fn= this.data.fndel
        if( fn )
          fn(this)
      }
      else if( this.value.length > 1 ) {
        var patt= this.value,
          parm= this.data.urlpar ? "&"+this.data.urlpar : ""
        show_buddy(this,  url+"?par="+par+"&pat="+esc(patt)+parm)
      }
    }
  }
  /*
  e.onkeydown= function(ev) {
    var keyC= ev.keyCode ? ev.keyCode : (ev.which ? ev.which : 0)
    if( keyC == 27 ) // esc
      this.previousElementSibling.style.display= "none"
      else if( keyC == 8 ) { // bksp
        var v= ""+this.value
        if( v )
          this.value= v.slice(0,-1)
      }
      else if( keyC == 46 )  { // del
        this.value= ""
        this.previousElementSibling.style.display= "none"
        var fn= this.data.fndel
        if( fn )
          fn(this)
        this.data.prv= ""
      }
  }
  e.onkeyup= function(ev) {
    var v= this.value
    if( v.length > 0 && v != this.data.prv ) {
      var patt= v,
        parm= this.data.urlpar ? "&"+this.data.urlpar : ""
      show_buddy(this, url+"?par="+par+"&pat="+escape(patt)+parm)
    }
  }
  */
}

function show_buddy( e, url)
{
  // load table rows into buddy and set event processing
  // url: for loading
  // e = elem (editbox)
  // load should return: <tr><td val=id>name</td>..
  // load should return: <tr><td val=id [prm=param]>name</td>..  02.12.16
  var eBuddy= e.previousElementSibling
  var down= e.getAttribute('down') > 0 ? 1 : 0
  //alert("showBuddy: "+buddy+", url:"+url)
  if( eBuddy.tagName == "DIV" ) {
    var func = function(resp, kod,status) {
      if( kod == 200 ) {
        // here show buddy
        eBuddy.firstElementChild.innerHTML= resp  // table content
        var off= (e.data.fl & 1 ? {left: 0, top: 0} : fullOffset(e)),
          offy= off.top + (down ? e.clientHeight +6 :
                        -10 -eBuddy.clientHeight -eBuddy.clientTop)
        eBuddy.style.left= off.left
        eBuddy.style.top= offy
        eBuddy.style.width= e.clientWidth + 20
        eBuddy.style.display= "block"
        var atd= eBuddy.querySelectorAll("td")
        for(i=0; i < atd.length; i++)
          atd[i].onclick= function(ev) {
            var v= this.getAttribute("val")
            e.value= this.textContent
            if( e.data && e.data.fnset ) {
              e.data.fnset(e, v, this.getAttribute("prm"))
              eBuddy.style.display= "none"
            }
          }
      }
    }
    if (ajax_load(url, {'noalert':1}, func)) {
      ajax_abort(1)
      ajax_load(url, {'noalert':1}, func)
    }
  }
}

// sticky header for long table, 16.03.22
// usage:
// 1. define src-head, dest-div with thead, style for dest
// 2. globals var nHdrTop, bHeader=false, eSrcHead=null, eDest=null;
// 3. window.onscroll= on_scroll  in window.onload()

function make_stick_header(shead, dest) // helper
{
  // shead= source <thead>, dest= sticky elem with <thead> inside, 16.03.22
  // return ref to <thead> in dest elem, null if error
  if( !shead || shead.tagName != "THEAD" ) return null
  if( !dest || !dest.tagName ) return null
  var dhead= dest.querySelector("thead"),
    sty= window.getComputedStyle(shead.parentNode), fnsize= sty["font-size"]
  if( !dhead ) return null
  dhead.innerHTML= shead.innerHTML
  dhead.parentNode.style.fontSize= fnsize
  // set widths
  var ash= shead.lastElementChild.children, adh= dhead.lastElementChild.children
  for( var i=0; i < ash.length; i++)
    adh[i].style.width= (ash[i].clientWidth-2)+"px"
  return dhead
}

function on_scroll()
{
  // handler for window.onscroll event, depends on global vars
  // eSrcHead= <thead> of source table,
  // eDest= destination sticky elem with <thead> inside
  // nHdrTop= top offset of source <thead>
  // bHeader= flag to track show/hide sticky thead
  if( !eSrcHead || eSrcHead.tagName!="THEAD" || !eDest || !nHdrTop ) return
  if( window.scrollY > nHdrTop && !bHeader ) {
    var dhead= make_stick_header(eSrcHead, eDest), offs= fullOffset(eSrcHead)
    eDest.style.left= (offs.left-2)+"px"
    eDest.style.display= "block"
    bHeader= true
  }
  else if( window.scrollY < nHdrTop && bHeader ) {
    eDest.style.display= "none"
    bHeader= false
  }
}
