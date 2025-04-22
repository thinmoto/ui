import autosize from 'autosize';

export default (element, options) => ({
    myElement: element,
    myOptions: options,

    init() {
        let component = this;

        let onAutosize = component.myElement.dataset.autosize || false;

        if(onAutosize)
            autosize(component.myElement);
    }
})
