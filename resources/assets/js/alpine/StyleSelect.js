import Choices from 'choices.js';

export default (element, options) => ({
    myElement: element,
    myOptions: options,
    mySelect: null,

    init() {
        let component = this;

        component.mySelect = new Choices(component.myElement);
    }
})
