// import Geocode from 'react-geocode';

/**
 * Get Current Location
 * @param timestamp
 * @returns {string}
 */
// export const getCurrentLocation = (locale = 'fr', callback = null) => {
//   const apiKey = 'AIzaSyAcJ5DVBnqF-t-q2jeyX-2FE-TDf42rE5s';
//   Geocode.setApiKey(apiKey);
//   Geocode.setRegion(locale);
//   navigator.geolocation.getCurrentPosition((position) => {
//     const lat = position.coords.latitude;
//     const lng = position.coords.longitude;
//     Geocode.fromLatLng(lat, lng).then(
//       response => {
//         const res = response.results[0];
//         const locality = res.address_components.find(item => item.types.includes('locality'));
//         // eslint-disable-next-line camelcase
//         const administrate_level_1 = res.address_components.find(item => item.types.includes('administrative_area_level_1'));
//         const city = locality ? locality.long_name : '';
//         // eslint-disable-next-line camelcase
//         const state = administrate_level_1 ? administrate_level_1.long_name : '';
//         const location = {
//           address: res.formatted_address,
//           city,
//           state,
//           location: {
//             lat,
//             lng
//           },
//         };
//         callback(location);
//       },
//       error => {
//         console.error(error);
//       }
//     );
//   });
// };
