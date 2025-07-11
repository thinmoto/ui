import Choices from 'choices.js';

export default (element, livewireModel) => ({
    myElement: element,
    mySelect: null,
    value: livewireModel,

    init() {
        const self = this;

        // init Choices
        self.mySelect = new Choices(self.myElement, {
            removeItemButton: false,
            shouldSort: false,
        });

        if(self.value)
            self.mySelect.setChoiceByValue(self.value.toString());

        // sync back on change
        self.myElement.addEventListener('change', () => {
            self.value = self.myElement.value;
        });
    }
});
