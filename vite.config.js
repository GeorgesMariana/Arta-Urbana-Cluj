import { defineConfig } from "vite";
import vue from "@vitejs/plugin-vue";
import { resolve } from "path";

export default defineConfig({
    plugins: [vue()],
    root: "resources", // Setează directorul rădăcină la 'resources'
    build: {
        outDir: "../public/build", // Unde se vor salva fișierele construite
        emptyOutDir: true,
        rollupOptions: {
            input: {
                main: resolve(__dirname, "resources/index.html"), // Punctul principal de intrare
            },
        },
    },
    server: {
        watch: {
            usePolling: true,
        },
        host: true, // Permite accesul din rețea
        port: 5173,
    },
});
