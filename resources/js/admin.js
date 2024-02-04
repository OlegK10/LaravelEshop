// START Menu
document.querySelectorAll('[menu-parent]').forEach(function (menuParent) {
    menuParent.addEventListener('click', function () {
        var menuChilds = this.nextElementSibling;
        if (menuChilds && menuChilds.hasAttribute('menu-childs')) {
            var childHeight = Array.from(menuChilds.children).reduce(function (acc, child) {
                return acc + child.offsetHeight;
            }, 0);
            menuChilds.style.height = (menuChilds.clientHeight === childHeight) ? '0px' : childHeight + 'px';
        }
        menuParent.classList.toggle('bg-theme-2');
    });
});
// END Menu

//START Btn save
document.querySelector('[btn-save]').addEventListener('click', function () {

});
//END Btn save

//START Flash
document.querySelectorAll('[flash-timeout]').forEach(function (flash, i) {
    let showTimeout = setTimeout(() => {
        flash.style.top = '0';
        clearTimeout(showTimeout);
    }, 200);
    let timeToHide = flash.getAttribute('flash-timeout') ?? 2100;

    let hideTimeout = setTimeout(() => {
        flash.style.top = '-100%';
        clearTimeout(hideTimeout);
    }, timeToHide);

    let destroytimeout = setTimeout(() => {
        flash.remove();
        clearTimeout(destroytimeout);
    }, timeToHide + 300);
});

document.querySelectorAll('[flash-onclick-close]').forEach(function (flash, i) {
    let showTimeout = setTimeout(() => {
        flash.style.top = '0';
        clearTimeout(showTimeout);
    }, 200);

    flash.querySelector('[btn-flash-confirm]').addEventListener('click', () => {
        let formConfirmId = flash.getAttribute('flash-onclick-close');

        let forms = document.querySelectorAll('form[id = "' + formConfirmId.toString() + '"]');
        if (forms.length === 0) {
            return console.error('Form with id --- ' + formConfirmId + ' --- doent not found on page, in FlashMessageObject u must to define form id which u want to submit and on page add to form same id like attribute <form ... id = "x" >');
        }
        if (forms.length > 1) {
            return console.error('Form with id ' + formConfirmId + ' must be unic');
        }

        forms[0].submit();
    })

    flash.querySelector('[btn-flash-disagree]').addEventListener('click', () => {
        flash.style.top = '-100%';

        let hideTimeout = setTimeout(() => {
            flash.remove();
            clearTimeout(hideTimeout);
        }, 300);
    })
});

//END Flash
