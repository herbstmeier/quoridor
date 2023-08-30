import axios from 'axios'

export function axiosSetup() {
    const axiosInstance = axios.create({
        baseURL: 'https://quoridor.herbstmeier.de/api',
        // headers: {
        //     'Content-Type': 'application/json',
        // },
    });

    axiosInstance.interceptors.request.use(
        (config) => {
            const token = localStorage.getItem('jwtToken');
            if (token) {
                config.headers['Authorization'] = `Bearer ${token}`;
            }
            return config;
        },
        (error) => {
            return Promise.reject(error);
        }
    );

    axiosInstance.interceptors.response.use(config => {
        console.log('response intercepted', config)
        return config
    })

    return axiosInstance
}