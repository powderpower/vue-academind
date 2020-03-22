import Home from './components/Home';
import Header from './components/Header';

const USER_COMPONENT_PATH           = './components/user/User';
const USER_START_COMPONENT_PATH     = './components/user/UserStart';
const USER_DETAIL_COMPONENT_PATH    = './components/user/UserDetail';
const USER_EDIT_COMPONENT_PATH      = './components/user/UserEdit';

/** подзагрузка компонентов через вебпак */
const User = (resolve) => {
    require.ensure([USER_COMPONENT_PATH], () => {
        resolve(require(USER_COMPONENT_PATH));
    });
};

const UserStart = (resolve) => {
    require.ensure([USER_START_COMPONENT_PATH], () => {
        resolve(require(USER_START_COMPONENT_PATH));
    });
};

const UserDetail = (resolve) => {
    require.ensure([USER_DETAIL_COMPONENT_PATH], () => {
        resolve(require(USER_DETAIL_COMPONENT_PATH));
    });
};

const UserEdit = (resolve) => {
    require.ensure([USER_EDIT_COMPONENT_PATH], () => {
        resolve(require(USER_EDIT_COMPONENT_PATH));
    });
};

const ROUTE_HOME = 'home';
const ROUTE_USERS = 'users';
const ROUTE_USER_DETAIL = 'userDetail';
const ROUTE_USER_EDIT = 'userEdit';

const routes = [
    {
        path: '/',
        name: ROUTE_HOME,
        components: {
            default: Home,
            'header-top': Header,
        },
    },
    {
        /**
         * для роутов, в которых есть чилдрены,
         * имя для корневого роута не прописываются
         */
        path: '/users',
        components: {
            default: User,
            'header-bottom': Header,
        },
        children: [
            {
                path: '/users',
                component: UserStart,
                name: ROUTE_USERS,
                // route middleware
                beforeEnter: (to, from, next) => {
                    console.log('route middleware');
                    next(); //вызывается всегда
                },
            },
            {
                path: ':id',
                component: UserDetail,
                name: ROUTE_USER_DETAIL,
            },
            {
                path: ':id/edit',
                component: UserEdit,
                name: ROUTE_USER_EDIT,
            },
        ],
    },
    {
        path: '/redirect-me',
        redirect: {
            name: ROUTE_USERS,
        },
    },
    {
        // как бросить 404
        path: '*',
        redirect: {
            name: ROUTE_HOME,
        }
    }
];

export {
    ROUTE_HOME,
    ROUTE_USERS,
    ROUTE_USER_DETAIL,
    ROUTE_USER_EDIT,
    routes,
};