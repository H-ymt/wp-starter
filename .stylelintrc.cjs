module.exports = {
  extends: [
    "stylelint-config-standard-scss",
    "stylelint-config-recess-order",
    "stylelint-prettier/recommended",
  ],
  plugins: ["stylelint-prettier"],
  overrides: [
    {
      files: ["src/**/*.{scss,css}"],
      customSyntax: "postcss-scss",
    },
  ],
  rules: {
    "selector-class-pattern": null,
    "prettier/prettier": true,
  },
  ignoreFiles: ["node_modules/*", "dist/**/*"],
}
