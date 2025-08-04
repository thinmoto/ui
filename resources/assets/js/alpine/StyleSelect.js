import Choices from 'choices.js';

export default (element, settings, livewireModel) => ({
    myElement: element,
    mySelect: null,
    value: livewireModel,
    myOptions: settings,

    init() {
        const self = this;

        // init Choices
        self.mySelect = new Choices(self.myElement, {
            removeItemButton: false,
            shouldSort: false,
            ...self.myOptions
        });

        if(self.value)
            self.mySelect.setChoiceByValue(self.value.toString());

        // sync back on change
        self.myElement.addEventListener('change', () => {
            self.value = self.myElement.value;
        });

        self.$watch('value', () => {
            if(self.value)
                self.mySelect.setChoiceByValue(self.value.toString());

            self.refresh();
        });
    },

    clear() {
        const self = this;

        self.myElement.selectedIndex = -1;
        self.mySelect.setChoiceByValue('');

        self.refresh();
    },

    refresh() {
        const self = this;

        self.mySelect.refresh();
    },
});
