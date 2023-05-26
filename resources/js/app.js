import './bootstrap';

import Alpine from 'alpinejs';

import { flare } from "@flareapp/flare-client";

// Only enable Flare in production, we don't want to waste your quota while you're developing:
if (process.env.NODE_ENV === 'production') {
    flare.light(import.meta.env.VITE_FLARE_KEY);
}

window.Alpine = Alpine;

Alpine.start();
