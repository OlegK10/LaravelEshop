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
