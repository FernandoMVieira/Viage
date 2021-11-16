let credencials =
    [
    {usuario: 'Fernando',
     senha: 'Melo',
     email: 'fernando@g.globo',
    }
    ]
const divSingUp = document.querySelector('.divSingUp')  
const formLogin = document.querySelector('.formLogin')
const btnLogin = document.querySelector('.btnLogin')
const btnSingUp = document.querySelector('.btnSingUp')

let formLoginHeight = 150
let formSingUpTransitionCounter = 0

divSingUp.addEventListener('click', ()=>{
    if (formSingUpTransitionCounter <= 1) {
        console.log(formSingUpTransitionCounter)
        var formSingUpTransition = setInterval( ()=> {        
            formLogin.style.height = `${formLoginHeight}px`
            formSingUpTransitionCounter += 1
            formLoginHeight += 1
            if (formSingUpTransitionCounter === 150) {
                clearInterval(formSingUpTransition)
            }
            
        }, 3)
    }
})

const btnLoginListener = () => {
    const input = document.querySelectorAll('input')
    const inputs = []
    input.forEach(item => { 
        switch(item.placeholder){
            case 'Insira seu usuário aqui': 
                inputs.usuario = item.value
                break;
            case 'Insira sua senha aqui': 
                inputs.senha = item.value
                break;           
        }
    
    })
    return inputs
}

const btnSingUpListener = () => {
    const input = document.querySelectorAll('input')
    const inputs = {}
    input.forEach(item => { 
        switch(item.placeholder){
            case 'Cadastre seu usuário aqui': 
                inputs.usuario = item.value
                break;
            case 'Cadastre sua senha aqui': 
                inputs.senha = item.value
                break;           
            case 'Cadastre seu e-mail aqui':
                inputs.email = item.value
                break;
        }
    
    })
    return inputs
}



btnLogin.addEventListener('click', () => {
    const inputs = btnLoginListener()
    let validated = false
    credencials.forEach((item, index)=>{
      
       if (credencials[index].usuario == inputs.usuario && credencials[index].senha == inputs.senha){
           validated = true
       }
    })
    
    if (validated == true) {
        alert('A sua credencial está correto')
        const input = document.querySelectorAll('input')
        input.forEach(item => {
            item.value = ''
        }

        )

        window.location.href="../homepage/homepage.html";
    }
    else {
        alert('A sua credencial está errada')
    }
})

btnSingUp.addEventListener('click', () => {
    const input = document.querySelectorAll('input')
    input.forEach(item => {
        item.value = ''
    })})