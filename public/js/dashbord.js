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
