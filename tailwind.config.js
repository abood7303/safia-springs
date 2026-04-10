import forms from '@tailwindcss/forms';
import containerQueries from '@tailwindcss/container-queries';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "class",
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                "inverse-surface": "#d7e3fc",
                "outline": "#8f9097",
                "tertiary": "#c6c6c7",
                "surface-container-low": "#101c2e",
                "on-primary-fixed": "#001e2b",
                "on-secondary": "#3d2e00",
                "error-container": "#93000a",
                "primary-fixed": "#c2e8ff",
                "secondary-container": "#785d00",
                "surface-container-highest": "#2a3548",
                "on-surface": "#d7e3fc",
                "error": "#ffb4ab",
                "on-tertiary-fixed": "#1a1c1c",
                "surface": "#071325",
                "secondary": "#C9A84C",
                "on-secondary-container": "#fdd977",
                "inverse-primary": "#006688",
                "on-primary-fixed-variant": "#004d67",
                "on-tertiary-container": "#7e8080",
                "surface-tint": "#C9A84C",
                "tertiary-container": "#141616",
                "on-tertiary-fixed-variant": "#454747",
                "inverse-on-surface": "#253144",
                "outline-variant": "#45474c",
                "surface-container": "#142032",
                "on-secondary-fixed-variant": "#584400",
                "tertiary-fixed": "#e2e2e2",
                "on-error": "#690005",
                "surface-variant": "#2a3548",
                "background": "#071325",
                "primary-container": "#001824",
                "on-background": "#d7e3fc",
                "tertiary-fixed-dim": "#c6c6c7",
                "surface-container-lowest": "#030e20",
                "on-tertiary": "#2f3131",
                "surface-container-high": "#1f2a3d",
                "on-primary": "#3d2e00",
                "on-secondary-fixed": "#241a00",
                "surface-bright": "#2e394d",
                "primary-fixed-dim": "#C9A84C",
                "surface-dim": "#071325",
                "secondary-fixed": "#ffe08f",
                "on-surface-variant": "#c5c6cd",
                "on-primary-container": "#C9A84C",
                "primary": "#C9A84C",
                "on-error-container": "#ffdad6",
                "secondary-fixed-dim": "#C9A84C"
            },
            borderRadius: {
                "DEFAULT": "0.5rem",
                "lg": "0.5rem",
                "xl": "0.75rem",
                "full": "9999px"
            },
            fontFamily: {
                "headline": ["Noto Serif", "Amiri", "serif"],
                "body": ["IBM Plex Sans Arabic", "Plus Jakarta Sans", "sans-serif"],
                "label": ["IBM Plex Sans Arabic", "Plus Jakarta Sans", "sans-serif"]
            }
        },
    },
    plugins: [
        forms,
        containerQueries,
    ],
};
