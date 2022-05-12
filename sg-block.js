wp.blocks.registerBlockType("sg-block/simple-block", {
  title: wp.i18n.__("Static Block", "sg-block"),
  description: wp.i18n.__("Content Show Block"),
  icon: "dashboard",
  category: "common",
  edit: function () {
    return wp.element.createElement(
      "span",
      { className: "sg-static-block" },
      "Welcome to wordpress"
    );
  },
  save: function () {
    return wp.element.createElement(
      "span",
      { className: "sg-static-block" },
      "Welcome to wordpress"
    );
  },
});
