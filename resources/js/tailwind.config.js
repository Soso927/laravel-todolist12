export default {
  content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
  theme: {
    extend: {
      colors: {
        space: {
          bg: "#0B0D17",     // fond
          text: "#D0D6F9",   // texte secondaire
          white: "#FFFFFF",  // texte clair
        },
      },
      fontFamily: {
        bellefair: ["Bellefair", "serif"],
        barlow: ["Barlow", "sans-serif"],
        "barlow-condensed": ["Barlow Condensed", "sans-serif"],
      },
      letterSpacing: {
        // valeurs proches de la maquette
        wider2: ".27em",   // ~2.7
        widemore: ".236em",// ~2.36
        huge: ".472em",    // ~4.72 (titres condensés)
      },
      screens: {
        // si besoin d'ajuster aux 3 vues de la maquette
        xs: "475px",
      },
    },
  },
  plugins: [],
}
