
console.log("Carregando footer JS");

var loadEffect = document.getElementById('loadEffectCover');
var divCadastroUsuarioWebZap = document.getElementById('cadastroUsuarioZap');


loadEffect.style.display = 'none';

function acaoLinkEntradaCover(){
    
    divCadastroUsuarioWebZap.style.display = 'none';
    loadEffect.style.display = 'block';
    
    setTimeout(function(){
        
        loadEffect.style.display = 'none';   
        document.getElementById('acessarWebZap').style.display = 'block';    
        document.getElementById('linkEntrada').classList.add("active");
        document.getElementById('linkCadastro').classList.remove("active");
        
    }, 500);
       
    
    return false;
    
}


function acaoLinkCadastroCover(){
    
    document.getElementById('acessarWebZap').style.display = 'none';
    document.getElementById('loadEffectCover').style.display = 'block';
    
    setTimeout(function(){
           
        document.getElementById('loadEffectCover').style.display = 'none';
        document.getElementById('linkCadastro').classList.add("active");
        document.getElementById('linkEntrada').classList.remove("active");
        document.getElementById('cadastroUsuarioZap').style.display = 'block';
        
    }, 500);
    
      
      
    return false;
  
}



        
 



