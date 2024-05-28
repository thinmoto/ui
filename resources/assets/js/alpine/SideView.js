export default (element, state = false) => ({
    myElement: element,
    myState: state,
    myCounter: 0,

    show() {
        this.myState = true;
    },

    hide() {
        this.myState = false;
    },

    toggle() {
        this.myState = !this.myState;
    },

    updateState() {
        this.updateCounter();
    },

    updateCounter() {
        let component = this;

        let openedSelector = document.querySelectorAll('.offcanvas.show');

        if(component.myState)
        {
            let counter = openedSelector.length + 1;

            component.myElement.querySelector('.offcanvas').classList.add('edit_view_'+(counter));
            component.myElement.querySelector('.offcanvas-backdrop').classList.add('edit_view_backdrop_'+(counter));
        }

        if(openedSelector.length)
            document.body.classList.add('no-scroll');
        else
            document.body.classList.remove('no-scroll');
    },

    init() {
        let component = this;

        window.Livewire.on('openEditView', function (){
            component.show();
        });
    }
})
