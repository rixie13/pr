( function( api ) {

	// Extends our custom "spa-salon" section.
	api.sectionConstructor['spa-salon'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );