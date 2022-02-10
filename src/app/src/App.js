import axios from "./utils/axiosWrapper";
import { useState, useEffect } from "react";

export default function App() {
  const [Test, setTest] = useState([]);

  useEffect(
    () => {
      TestAPI();
    },
    // eslint-disable-next-line
    []
  );
  //テストAPI
  const TestAPI = () => {
    axios.get("/items").then((res) => {
      console.log(res);
      setTest(res.data);
    });
  };
  return (
    <div className="App">
      {Test.map((item) => {
        return (
          <>
            <p>ID:{item.id}</p>
            <p>名前:{item.name}</p>
            <p>説明:{item.description}</p>
            <p>作成日:{item.created_at}</p>
            <p>更新日:{item.updated_at}</p>
          </>
        );
      })}
    </div>
  );
}
