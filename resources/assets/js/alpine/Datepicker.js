import flatpickr from 'flatpickr';

export default (element, options, entangleValue) => ({
    myElement: element,
    myOptions: options,
    myPicker: null,

    init() {
        let component = this;

        component.myElement.setAttribute('value', entangleValue.initialValue);

        component.myPicker = flatpickr(component.myElement, component.myOptions);
    }
})
