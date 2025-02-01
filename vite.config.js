import autoprefixer from "autoprefixer"
import path from "path"
import postcssNesting from "postcss-nesting"
import { defineConfig } from "vite"
import liveReload from "vite-plugin-live-reload"
import sassGlobImports from "vite-plugin-sass-glob-import"

const themePath = "/wp-content/themes/wp-starter"
const assets = process.env.NODE_ENV === "development" ? "/" : "/dist/"

export default defineConfig({
  plugins: [liveReload(__dirname + "/**/*.php"), sassGlobImports()],
  root: "",
  base: process.env.NODE_ENV === "development" ? "./" : "/dist/",
  build: {
    outDir: path.resolve(__dirname, "./dist"),
    emptyOutDir: true,
    manifest: true,
    target: "es2018",
    rollupOptions: {
      input: {
        main: path.resolve(__dirname + "/main.js"),
      },
      output: {
        entryFileNames: `assets/[name].js`,
        chunkFileNames: `assets/[name].js`,
        assetFileNames: ({ name }) => {
          if (/\.( gif|jpeg|jpg|png|svg|webp| )$/.test(name ?? "")) {
            return "assets/images/[name].[ext]"
          }
          if (/\.css$/.test(name ?? "")) {
            return "assets/css/[name].[ext]"
          }
          if (/\.js$/.test(name ?? "")) {
            return "assets/js/[name].[ext]"
          }
          return "assets/[name].[ext]"
        },
      },
    },
    assetsInlineLimit: 0,
    minify: false,
    write: true,
  },
  server: {
    cors: true,
    strictPort: true,
    port: 3000,
    https: false,
    hmr: {
      host: "localhost",
    },
  },
  css: {
    postcss: {
      plugins: [postcssNesting, autoprefixer],
    },
  },
})
