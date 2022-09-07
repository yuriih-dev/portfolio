import { ListItemType } from '../pages/docs';

export const menu: ListItemType[] = [
  { title: 'Overview', url: '/docs/README.md' },
  {
    title: 'Projects Summaries',
    list: [
      { title: 'Havvi', url: '/docs/projects/havvi.md' },
      { title: 'SpokeStack', url: '/docs/projects/spokestack.md' },
      { title: 'Cloudpin', url: '/docs/projects/cloudpin.md' },
      { title: 'Chill', url: '/docs/projects/chill.md' },
      { title: 'Open House', url: '/docs/projects/openhouse.md' },
      { title: 'Framexperts', url: '/docs/projects/framexperts.md' },
      { title: 'Wasil', url: '/docs/projects/wasil.md' }
    ]
  },
  {
    title: 'Languages',
    list: [
      { title: 'PHP', url: '/docs/languages/php.md' },
      { title: 'HTML', url: '/docs/languages/html.md' },
      { title: 'Javascript', url: '/docs/languages/javascript.md' },
      { title: 'CSS/SCSS', url: '/docs/languages/css.md' },
      { title: 'Python', url: '/docs/languages/python.md' }
    ]
  },
  {
    title: 'Frameworks',
    list: [
      {
        title: 'Server Side',
        list: [
          { title: 'Laravel', url: '/docs/frameworks/laravel.md' },
          { title: 'Node/Express', url: '/docs/frameworks/node.md' }
        ]
      },
      {
        title: 'Client Side',
        list: [{ title: 'ReactJS' }, { title: 'VueJS' }]
      },
      {
        title: 'Mobile Application',
        list: [{ title: 'Android' }, { title: 'Swift' }, { title: 'React Native', url: '/docs/frameworks/rn.md' }, { title: 'Flutter' }]
      },
      {
        title: 'Hybrid',
        list: [{ title: 'WordPress' }]
      }
    ]
  },
  {
    title: 'Database',
    list: [
      { title: 'MySQL' },
      { title: 'MongoDB' },
      { title: 'PostgreSQL', url: '/docs/database/PostgreSQL.md' },
      { title: 'Firebase/Firestore', url: '/docs/database/fb.md' },
      { title: 'MSSQL' }
    ]
  },
  {
    title: 'Cloud Services',
    list: [
      { title: 'Google', url: '/docs/services/google.md' },
      { title: 'AWS', url: '/docs/services/aws.md' },
      { title: 'Azure', url: '/docs/services/azure.md' }
    ]
  },
  {
    title: 'System',
    list: [
      { title: 'Apache', url: '/docs/system/apache.md' },
      { title: 'Linux', url: '/docs/system/linux.md' },
      { title: 'Nginx', url: '/docs/system/nginx.md' },
      { title: 'Caddy', url: '/docs/system/caddy.md' },
      { title: 'Window', url: '/docs/system/windows.md' }
    ]
  },
  {
    title: 'Tools',
    list: [
      { title: 'Composer', url: '/docs/tools/composer.md' },
      { title: 'Version Control', url: '/docs/tools/git.md' },
      { title: 'Prettier', url: '/docs/tools/prettier.md' },
      { title: 'Npm', url: '/docs/tools/npm.md' },
      { title: 'Webpack', url: '/docs/tools/webpack.md' },
      { title: 'Jest', url: '/docs/tools/jest.md' }
    ]
  },
  {
    title: 'Trouble Shootings',
    list: [{ title: 'Git', url: '/docs/troubleshootings/git.md' }]
  },
  {
    title: 'Blogs',
    url: '/docs/blogs.md'
  },
  {
    title: 'Libraries',
    url: '/docs/libraries.md'
  },
  {
    title: 'Software Terms',
    url: '/docs/concepts.md'
  }
];
