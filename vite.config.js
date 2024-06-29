import autoprefixer from "autoprefixer"
import fs from "fs"
import glob from "glob"
import path from "path"
import postcssNesting from "postcss-nesting"
import { defineConfig } from "vite"
import liveReload from "vite-plugin-live-reload"
import sassGlobImports from "vite-plugin-sass-glob-import"
import VitePluginWebpAndPath from "vite-plugin-webp-and-path"

const themePath = "/wp-content/themes/wp-starter"
const assets = process.env.NODE_ENV === "development" ? "/" : "/dist/"

function copyPHPFiles() {
  return {
    name: "copy-php-files",
    closeBundle() {
      const files = glob.sync(path.resolve(__dirname, "**/*.php"))
      files.forEach((file) => {
        const dest = path.resolve(__dirname, "dist", path.relative(__dirname, file))
        fs.mkdirSync(path.dirname(dest), { recursive: true })
        fs.copyFileSync(file, dest)
      })
    },
  }
}

export default defineConfig({
  plugins: [
    liveReload(__dirname + "/**/*.php"),
    sassGlobImports(),
    VitePluginWebpAndPath(),
    copyPHPFiles(),
  ],
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
    preprocessorOptions: {
      scss: {
        additionalData: `$base-dir: '` + themePath + assets + `';`,
      },
    },
    postcss: {
      plugins: [postcssNesting, autoprefixer],
    },
  },
})
