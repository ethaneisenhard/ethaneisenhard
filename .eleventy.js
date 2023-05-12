module.exports = function (eleventyConfig) {
  eleventyConfig.setTemplateFormats([
    "html",
    "css",
    "jpg",
    "png",
    "jpeg",
    "liquid",
    "md",
    "svg",
  ]);
  eleventyConfig.addPassthroughCopy("javascript");
};
