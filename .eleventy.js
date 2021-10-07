module.exports = function (eleventyConfig) {
  eleventyConfig.setTemplateFormats(["html", "css", "jpg", "png", "liquid", "md", "svg"]);
  eleventyConfig.addPassthroughCopy("javascript");
};
