H��8R�!.��d3M�t%2F��0㒩�dMa�C�ST�"���g���n��R���ă�6�?G����/�^�mt�A
�,x*'_�T��	%$�8cʜg='��&�d�-�����.���7���R0=B�{\c|�\Q�@h�NZC���g��9��$C 	�'!�+�d9u澚)6�z��t͑���s�{O�O~.4&�kz$����K`�$B�.�Ń�(h"����e��X�%O��k٦C�o�������+�/�W׼��O���-Z@����W����9Jc]�+H|m��B&�b��f ��@�2,I1��N�X�<��@|l���+6�n'����fB�M�Wn@C�u
V��xY`7f�q�'�P�a���)p �ì&�=�_�j����.\>���Q�w�X����.�nT-��cC4��~�}�fǠ����ƿ�F"�øP:�Tv�Y���u�-��L�\�g%�b�\|��b���db(�G�t��I�G��w	l         //console.log('region-over', code);
        },
        onRegionOut: function(event, code) {
            //console.log('region-out', code);
        },
        onRegionClick: function(event, code) {
            //console.log('region-click', code);
        },
        onRegionSelected: function(event, code, isSelected, selectedRegions) {
            //console.log('region-select', code, isSelected, selectedRegions);
            if (window.localStorage) {
                window.localStorage.setItem(
                    'jvectormap-selected-regions',
                    JSON.stringify(selectedRegions)
                );
            }
        },

        panOnDrag: true,

        focusOn: {
            x: 0.5,
            y: 0.5,
            scale: 1.2,
            animate: true
        },


        regionStyle: {
            initial: {
                fill: '#ffffff',
                'fill-opacity': 1,
                stroke: 'false',
                'stroke-width': 0,
                'stroke-opacity': 1
            },
            hover: {
                fill: '#FBFBFB',
                'fill-opacity': 1,
                cursor: 'pointer'
            },
            selected: {
                fill: '#eceff1'
            },
            selectedHover: {}
        },

        markerStyle: {
            initial: {
                fill: '#ff4081',
                stroke: '#f8bbd0',
                r: 6
            },
            hover: {
                stroke: '#f8bbd0',
                "stroke-width": 3,
                cursor: 'pointer'
            },
            selected: {
                fill: '#f50057',
                "stroke-width": 0,
            },
        },
        backgroundColor: 'transperent',
        markers: [{
            latLng: [-38.41, -63.61],
            name: 'Argentina',            
        }, {
            latLng: [-25.27, 133.77],
            name: 'Australia'
        },  {
            latLng: [-14.23, -51.92],
            name: 'Brazil'
        }, {
            latLng: [56.13, -106.34],
            name: 'Canada'
        }, {
            latLng: [35.86, 104.19],
            name: 'China'
        }, {
            latLng: [46.22, 2.21],
            name: 'France'
        }, {
            latLng: [51.16, 10.45],
            name: 'Germany'
        }, {
            latLng: [20.59, 78.96],
            name: 'India'
        }, {
            latLng: [41.87, 12.56],
            name: 'Italy'
        }, {
            latLng: [4.21, 101.97],
            name: 'Malaysia'
        }, {
            latLng: [-40.90, 174.88],
            name: 'New Zealand'
        }]
    });