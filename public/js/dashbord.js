function Activeez()
{
    const Btn_p = document.querySelector('.principales');
    const Btn_s = document.querySelector('.secondaires');
    const Btn1 = document.querySelector('.R11');
    const Btn2 = document.querySelector('.A11');
    const Btn3 = document.querySelector('.A12');

    Btn_p.classList.add('hidden');
    Btn_s.classList.remove('hidden');
    Btn_s.classList.add('block');

    Btn1.classList.remove('hidden');
    Btn1.classList.add('block');

    Btn2.classList.remove('hidden');
    Btn2.classList.add('block');

    Btn3.classList.remove('hidden');
    Btn3.classList.add('block');
}

function Desactiveez()
{
    const Btn_p = document.querySelector('.principales');
    const Btn_s = document.querySelector('.secondaires');
    const Btn1 = document.querySelector('.R11');
    const Btn2 = document.querySelector('.A11');
    const Btn3 = document.querySelector('.A12');

    Btn_s.classList.add('hidden');
    Btn_p.classList.remove('hidden');
    Btn_p.classList.add('block');

    Btn1.classList.remove('block');
    Btn1.classList.add('hidden');

    Btn2.classList.remove('block');
    Btn2.classList.add('hidden');

    Btn3.classList.remove('block');
    Btn3.classList.add('hidden');
}
function Activez()
{
    const Btn_p = document.querySelector('.principale');
    const Btn_s = document.querySelector('.secondaire');
    const Btn1 = document.querySelector('.R1');
    const Btn2 = document.querySelector('.A1');

    Btn_p.classList.add('hidden');
    Btn_s.classList.remove('hidden');
    Btn_s.classList.add('block');

    Btn1.classList.remove('hidden');
    Btn1.classList.add('block');

    Btn2.classList.remove('hidden');
    Btn2.classList.add('block');
}

function Desactivez()
{
    const Btn_p = document.querySelector('.principale');
    const Btn_s = document.querySelector('.secondaire');
    const Btn1 = document.querySelector('.R1');
    const Btn2 = document.querySelector('.A1');

    Btn_s.classList.add('hidden');
    Btn_p.classList.remove('hidden');
    Btn_p.classList.add('block');

    Btn1.classList.remove('block');
    Btn1.classList.add('hidden');

    Btn2.classList.remove('block');
    Btn2.classList.add('hidden');
}
function ActiveHeader()
{
    const btnA = document.querySelector('.hA');
    const btnD = document.querySelector('.hD');
    const btn = document.querySelector('.hC');
    

    
    btn.classList.remove('md:block');
    //btn.classList.add('md:hidden');
    btnA.classList.add('hidden');   
    btnD.classList.remove('hidden');
    btnD.classList.add('block');
}
function DesactiveHeader()
{
    const btnA = document.querySelector('.hA');
    const btnD = document.querySelector('.hD');
    const btn = document.querySelector('.hC');

    btnD.classList.remove('block');
    btnD.classList.add('hidden');
    btn.classList.remove('md:hidden');
    btn.classList.add('md:block');
   
    btnA.classList.remove('hidden');
    btnA.classList.add('block');
}

function Pop()
{
    let pop = document.querySelector('.Pop');
    pop.classList.remove('Pops');
    pop.classList.remove('hidden');
    pop.classList.add('Popt');
    pop.classList.add('block')
    pop.addEventListener('animationend', () => {
        pop.classList.remove('hidden');
        pop.classList.add('block')
        
      });
    
}
function PopR()
{
    let pop = document.querySelector('.Pop');
    pop.classList.remove('Popt');
    pop.classList.add('Pops');
    pop.addEventListener('animationend', () => {
        pop.classList.remove('block');
        pop.classList.add('hidden');
      });
    
}