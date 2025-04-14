import bootstrap from 'bootstrap/dist/js/bootstrap.js';

export default (element, state = false, modalStateHook) => ({
    myElement: element,
    myState: state,
    myStateHook: modalStateHook,
    myCounter: 0,

    show() {
        this.myState = true;
        this.myStateHook = Math.random();
    },

    hide() {
        this.myState = false;
    },

    toggle() {
        this.myState = !this.myState;
    },

    updateState() {
        let component = this;

        if(component.myState)
        {
            component.myCounter = document.querySelectorAll('.modal.show').length + 1;

            component.myModal.show();

            component.myElement.classList.add('modal_'+(component.myCounter));

            //setTimeout(function (){
                component.myModal._backdrop._element.classList.add('modal_backdrop_'+(component.myCounter));
            //}, 50);
        }
        else
        {
            component.myModal.hide();

            component.myElement.classList.remove('modal_'+(component.myCounter));

            //setTimeout(function (){
                component.myModal._backdrop._element.classList.remove('modal_backdrop_'+(component.myCounter));
            //}, 500);
        }
    },

    showLoading() {

    },

    init() {
        let component = this;

        component.myModal = new bootstrap.Modal(component.myElement, {
            // 'backdrop': 'static',
        });

        // component.myElement.addEventListener('show.bs.modal', event => {
        //     // let counter = document.querySelectorAll('.modal.show').length;
        //
        //     component.myElement.classList.add('modal_'+(component.myCounter));
        //
        //     setTimeout(function (){
        //         component.myModal._backdrop._element.classList.add('modal_backdrop_'+(component.myCounter));
        //     }, 50);
        // });
        //
        // component.myElement.addEventListener('shown.bs.modal', event => {
        //     // let counter = document.querySelectorAll('.modal.show').length;
        //
        //     if(component.myModal._backdrop._element.classList)
        //         component.myModal._backdrop._element.classList.add('modal_backdrop_'+(component.myCounter));
        //
        //     // component.$dispatch('ui-update-state');
        // });

        component.myElement.addEventListener('hidden.bs.modal', event => {
            component.myState = false;
        });

        // component.myCounter = window.editViewCounter = (window.editViewCounter || 0) + 1;
    }
})
