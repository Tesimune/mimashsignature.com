import{W as n,j as e,a as d}from"./app-993787b3.js";import{G as u}from"./GuestLayout-b4030212.js";import{T as c,I as p}from"./TextInput-c21d5032.js";import{P as x}from"./PrimaryButton-a182b32d.js";import"./ApplicationLogo-7b696180.js";import"./iconBase-0d93af5b.js";function b({status:a}){const{data:t,setData:o,post:r,processing:m,errors:i}=n({email:""}),l=s=>{s.preventDefault(),r(route("password.email"))};return e.jsxs(u,{children:[e.jsx(d,{title:"Forgot Password"}),e.jsx("div",{className:"mb-4 text-sm text-gray-600",children:"Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one."}),a&&e.jsx("div",{className:"mb-4 font-medium text-sm text-green-600",children:a}),e.jsxs("form",{onSubmit:l,children:[e.jsx(c,{id:"email",type:"email",name:"email",value:t.email,className:"mt-1 block w-full",isFocused:!0,onChange:s=>o("email",s.target.value)}),e.jsx(p,{message:i.email,className:"mt-2"}),e.jsx("div",{className:"flex items-center justify-end mt-4",children:e.jsx(x,{className:"ms-4",disabled:m,children:"Email Password Reset Link"})})]})]})}export{b as default};