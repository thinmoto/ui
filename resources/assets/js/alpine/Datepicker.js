import flatpickr from 'flatpickr';

// Import common locales statically
import { Ukrainian } from 'flatpickr/dist/l10n/uk.js';
import { Russian } from 'flatpickr/dist/l10n/ru.js';
import { German } from 'flatpickr/dist/l10n/de.js';
import { French } from 'flatpickr/dist/l10n/fr.js';
import { Spanish } from 'flatpickr/dist/l10n/es.js';
import { Italian } from 'flatpickr/dist/l10n/it.js';
import { Polish } from 'flatpickr/dist/l10n/pl.js';

export default (element, options, entangleValue) => ({
    myElement: element,
    myOptions: options,
    myPicker: null,

    // Static locale mapping
    localeMap: {
        'uk': Ukrainian,
        'uk-ua': Ukrainian,
        'ru': Russian,
        'ru-ru': Russian,
        'de': German,
        'de-de': German,
        'fr': French,
        'fr-fr': French,
        'es': Spanish,
        'es-es': Spanish,
        'it': Italian,
        'it-it': Italian,
        'pl': Polish,
        'pl-pl': Polish,
    },

    async init() {
        let component = this;

        component.myElement.setAttribute('value', entangleValue.initialValue);

        // Load locale before initializing flatpickr
        component.loadUserLocale();

        component.myPicker = flatpickr(component.myElement, component.myOptions);
    },

    loadUserLocale() {
        try {
            // Get user's system locale
            const userLocale = navigator.language || navigator.userLanguage || 'en';
            const locale = userLocale.toLowerCase().replace('_', '-');
            const langCode = locale.split('-')[0];

            // Skip if already English
            if (langCode === 'en') return;

            // Try to get locale from our static map
            const localeData = this.localeMap[locale] || this.localeMap[langCode];

            if (localeData) {
                this.myOptions = {
                    ...this.myOptions,
                    locale: localeData
                };
                console.log(`Loaded flatpickr locale: ${locale}`);
            } else {
                console.warn(`Flatpickr locale not available: ${locale}`);
            }
        } catch (error) {
            console.warn('Could not load user locale for flatpickr:', error);
        }
    }
})
