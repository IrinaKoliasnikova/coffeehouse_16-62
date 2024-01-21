//Modal Window

const btnOpen = document.getElementById('btn-open');
const modal = document.getElementById('wrapper-modal');

const overlay = document.getElementById('overlay');
const btnClose = document.getElementById('btn-close');

btnOpen.addEventListener('click', () => {
	modal.classList.add('active');
})

const closeModal = () => {
	modal.classList.remove('active')
}
overlay.addEventListener('click', closeModal)
btnClose.addEventListener('click', closeModal)


//Modal 2

const btnOpenS = document.getElementById('btn-open-2');
const modalS = document.getElementById('wrapper-modal-2');

const overlayS = document.getElementById('overlay-2');
const btnCloseS = document.getElementById('btn-close-2');

btnOpenS.addEventListener('click', () => {
	modalS.classList.add('active');
})

const closeModalS = () => {
	modalS.classList.remove('active')
}
overlay.addEventListener('click', closeModalS)
btnCloseS.addEventListener('click', closeModalS)


//Modal 3 

const btnOpenTh = document.getElementById('btn-open-3');
const modalTh = document.getElementById('wrapper-modal-3');

const overlayTh = document.getElementById('overlay-3');
const btnCloseTh = document.getElementById('btn-close-3');

btnOpenTh.addEventListener('click', () => {
	modalTh.classList.add('active');
})

const closeModalTh = () => {
	modalTh.classList.remove('active')
}
overlay.addEventListener('click', closeModalTh)
btnCloseTh.addEventListener('click', closeModalTh)


//Modal 4

const btnOpenFth = document.getElementById('btn-open-4');
const modalFth = document.getElementById('wrapper-modal-4');

const overlayFth = document.getElementById('overlay-4');
const btnCloseFth = document.getElementById('btn-close-4');

btnOpenFth.addEventListener('click', () => {
	modalFth.classList.add('active');
})

const closeModalFth = () => {
	modalFth.classList.remove('active')
}
overlay.addEventListener('click', closeModalFth)
btnCloseFth.addEventListener('click', closeModalFth)


//Modal 5

const btnOpenF = document.getElementById('btn-open-5');
const modalF = document.getElementById('wrapper-modal-5');

const overlayF = document.getElementById('overlay-5');
const btnCloseF = document.getElementById('btn-close-5');

btnOpenF.addEventListener('click', () => {
	modalF.classList.add('active');
})

const closeModalF = () => {
	modalF.classList.remove('active')
}
overlay.addEventListener('click', closeModalF)
btnCloseF.addEventListener('click', closeModalF)


//Modal 6

const btnOpenSix = document.getElementById('btn-open-6');
const modalSix = document.getElementById('wrapper-modal-6');

const overlaySix = document.getElementById('overlay-6');
const btnCloseSix = document.getElementById('btn-close-6');

btnOpenSix.addEventListener('click', () => {
	modalSix.classList.add('active');
})

const closeModalSix = () => {
	modalSix.classList.remove('active')
}
overlay.addEventListener('click', closeModalSix)
btnCloseSix.addEventListener('click', closeModalSix)


//Modal 7

const btnOpenSev = document.getElementById('btn-open-7');
const modalSev = document.getElementById('wrapper-modal-7');

const overlaySev = document.getElementById('overlay-7');
const btnCloseSev = document.getElementById('btn-close-7');

btnOpenSev.addEventListener('click', () => {
	modalSev.classList.add('active');
})

const closeModalSev = () => {
	modalSev.classList.remove('active')
}
overlay.addEventListener('click', closeModalSev)
btnCloseSev.addEventListener('click', closeModalSev)

//Menu

$(function () {
	$('.menu-open').click(function () {
		$('.menu').toggleClass('show')
	})
});

