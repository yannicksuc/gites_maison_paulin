import Head from 'next/head'
import Link from 'next/link'

export default function Home() {
  return (
      <div className="container">
          <h1>SITE UNDER CONSTRUCTION</h1>
          <style jsx>{`
          @import url('https://fonts.googleapis.com/css2?family=Mulish:wght@900&display=swap');
          
          h1 {
            margin: auto;
            font-size: 800;
            text-shadow: 2px 2px #00000088;
            color: white;
            font-family: 'Mulish', sans-serif;
          }
          .container {
          min-height: 100vh;
          padding: 0 0.5rem;
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
        }
          `}</style>
          <style jsx global>{`
            html,
            body {
              padding: 0;
              margin: 0;
              font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto,
                Oxygen, Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue,
                sans-serif;
              width: 100%;
              height: 100%;
              background-image:url(/workinprogress-background.jpg);
              background-size: cover;
              background-attachment:fixed;
            }
    
            * {
              box-sizing: border-box;
            }
          `}</style>
      </div>
  )
}
