import { defineConfig } from "vite";
import path from "node:path";

export default defineConfig({
    build: {
        emptyOutDir: false,  // Clear the output directory before building
        rollupOptions: {
            input: {
                main: path.resolve(__dirname, 'index.html'),
            },
            output: {
                entryFileNames: 'main.js',
            }
        },
        outDir: "./html"
    }
});
