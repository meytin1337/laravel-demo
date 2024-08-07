// @ts-check

import eslint from "@eslint/js";
import tseslint from "typescript-eslint";
import pluginVue from "eslint-plugin-vue";

export default tseslint.config(
    eslint.configs.recommended,
    ...tseslint.configs.strict,
    ...tseslint.configs.stylistic,
    ...pluginVue.configs["flat/recommended"],
    {
        files: ["*.vue", "**/*.vue"],
        languageOptions: {
            parserOptions: {
                parser: "@typescript-eslint/parser",
            },
        },
    },
);
