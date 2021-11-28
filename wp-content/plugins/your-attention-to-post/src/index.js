wp.blocks.registerBlockType('ourplugin/your-attention-to-post', {
  title: 'Are you paying Attention?',
  icon: 'smiley',
  category: 'common',
  edit: function () {
    return (
      <div>
        <p>Hello, this is a paragraph.</p>
        <h4>Hi there.</h4>
      </div>
    );
  },
  save: function () {
    return (
      <>
        <p>Hello, this is a paragraph front end.</p>
        <h4>Hi there front end.</h4>
      </>
    );
  },
});
