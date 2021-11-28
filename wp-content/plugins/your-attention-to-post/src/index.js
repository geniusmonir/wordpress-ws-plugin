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
    return wp.element.createElement('h1', null, 'This is the frontend.');
  },
});
