module.exports = function(grunt){

	require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
			htmlhint: {
				build: {
				options: {
					'tagname-lowercase': true,
					'attr-lowercase': true,
					'attr-value-double-quotes': true,
					'id-unique': true,
					'head-script-disabled': false,
					'style-disabled': false
				},
				src: ['*.html', '*.tpl']
			}
		},
		uglify: {
			build: {
				files: {
					'dist/js/head.min.js': ['src/js/ctm.js', 'src/js/fontloader.js'],
					'dist/js/sw.min.js': ['src/js/sw.js']
				}
			}
		},
		staticinline: {
			main: {
				options: {
					prefix: '@{',
					suffix: '}@',
					vars: {
						'css_include': '<%= grunt.file.read("dist/css/main.css") %>'
					}
				},
				files: {
					'header.php': 'header-src.php',
					'offline.html': 'offline-src.html'
				}
			}
		},
		sass: {
			dist: {
				options: {
					style: 'compressed'
				},
				files: {
					'dist/css/main.css': 'src/scss/main.scss'
				}
			}
		},
		autoprefixer: {
			no_dest: {
				src: 'dist/css/main.css'
			}
		},
		browserSync: {
			dev: {
				bsFiles: {
					src : [
						'dist/css/*.css',
						'*.html'
					]
				},
				options: {
					server: {
						baseDir: "./"
					}
				}
			}
		},
		watch: {
			options: {
				livereload: true,
			},
			html: {
				files: ['*.html', '*.php'],
				tasks: ['htmlhint', 'staticinline']
			},
			js: {
				files: ['src/js/**/*.js'],
				tasks: ['uglify']
			},
			css: {
				files: ['src/scss/**/*.scss'],
				tasks: ['buildcss']
			}
		}
	});

	grunt.registerTask('default', []);
	grunt.registerTask('buildcss',  ['sass', 'autoprefixer', 'staticinline']);

};
