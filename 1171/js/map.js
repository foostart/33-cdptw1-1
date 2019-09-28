jQuery(document).ready(function () {
  jQuery('#world-map-gdp').vectorMap({
  map: 'world_en',
  color: '#42ac50',
  hoverOpacity: 0.7,
  selectedColor: '#666666',
  enableZoom: true,
  showTooltip: true,
  scaleColors: ['#42ac50', '#006491'],
  values: sample_data,
  normalizeFunction: 'polynomial'
  });
});