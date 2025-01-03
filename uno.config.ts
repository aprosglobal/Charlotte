// uno.config.ts
import { defineConfig } from "unocss"
import presetUno from "@unocss/preset-uno"
import {
  presetAttributify,
} from 'unocss'
import transformerDirectives from "@unocss/transformer-directives"
import presetAutoprefixer from "unocss-preset-autoprefixer"
import { presetCalc } from "unocss-preset-calc"
import presetIcons from "@unocss/preset-icons"
import transformerVariantGroup from "@unocss/transformer-variant-group"


const calc = (value: number) => `calc(${value} * clamp(0px,100vw,1440px) / var(--width-screen))`

export default defineConfig({
  content: {
    filesystem: [
      "./templates/**/**.php",
      "./partials/**/**.php",
      "./header.php",
      "./footer.php",
      "./single-**.php",
      "./single.php",
      "./404.php",
      "./functions.php",
    ],
  },
  presets: [
    presetAttributify(),
    presetUno(),
    presetCalc({
      max: 1440,
      min: 375,
    }),
    presetAutoprefixer(),
    presetIcons(),
  ],
  // ...UnoCSS options

  rules: [["leading-normal", { "line-height": "normal" }]],
  shortcuts: [],
  theme: {
    colors: {

      // #ED8A42
      naranja: "#EC8A3F",
      azul: "#3E7EA6",
      amarillo: "#EAB317",
      cafe: "#9d6a32",
      plomo: "#d9d9d9",
      cafe2: "#ca783d",
      rojo: "#ed8a4212",
      plomo3: "#F3F3F2",
    },
    fontFamily: {
      oswald: ["Oswald", "sans-serif"],
      frank: ["Frank_Ruhl_Libre", "sans-serif"],
      covered: ["CoveredByYourGrace", "sans-serif"],
      // nunito: ["Nunito", "sans-serif"],
    },
    container: {
      center: true,
      padding: {
        xs: calc(66),
        md: calc(233),
      },
      maxWidth: {
        md: "100%",
        "2xl": "1440px",
      },
    },
    breakpoints: {
      xs: "320px",
      // => @media (min-width: 640px) { ... }

      sm: "640px",
      // => @media (min-width: 640px) { ... }

      md: "768px",
      // => @media (min-width: 768px) { ... }

      lg: "1024px",
      // => @media (min-width: 1024px) { ... }

      xl: "1280px",
      // => @media (min-width: 1280px) { ... }

      "2xl": "1536px",
      // => @media (min-width: 1536px) { ... }

      "3xl": "1920px",
      // => @media (min-width: 1920px) { ... }
    },
  },
  transformers: [transformerDirectives(), transformerVariantGroup()],
})
